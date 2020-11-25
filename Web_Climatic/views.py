from django.http import HttpResponse
from django.template import Template,Context
from django.template.loader import get_template
from django.shortcuts import render
from django.db import models
from django.urls import reverse_lazy
from .models import *
from .forms import *
import requests
from django.contrib.auth.forms import UserCreationForm,UserChangeForm
from django.contrib.auth.mixins import LoginRequiredMixin,UserPassesTestMixin
from django.views.generic import ListView,DetailView,CreateView,UpdateView,DeleteView
from django_tables2 import SingleTableView
from django.core.mail  import send_mail


def contactar(request):
     if request.method=='GET':
          form=enviarMensaje()
          
     else:
          form=enviarMensaje(request.POST)
          if form.is_valid():
               form_email=form.cleaned_data['email']
               form_subject=form.cleaned_data['nombre']
               form_mensaje=form.cleaned_data['mensaje']
               send_mail(form_subject,form_mensaje,form_email,['luisacajabon310@gmail.com',form_email])
               form=enviarMensaje()
     
     return render(request,'contacto.html',{'form':form})



class usuarioNuevo(CreateView):
     form_class=registroForm
     template_name='registration/register.html'
     success_url=reverse_lazy('login')
class ciudadnueva(LoginRequiredMixin,CreateView):
     form_class=CityForm
     template_name='agregarciudad.html'
     success_url=reverse_lazy('climci')



class editarperfiluser(LoginRequiredMixin,UpdateView):
     model=Usuario
     form_class=registrart
     template_name='registration/estilo.html'
     success_url=reverse_lazy('login')

class eliminarCiudad(DeleteView,LoginRequiredMixin):
     model=ciudad
     template_name='del-ciudad.html'
     fields='__all__'
     success_url=reverse_lazy('climci')
   
def climatic(request):
    url = 'http://api.openweathermap.org/data/2.5/weather?q={}&units=imperial&appid=5da7d564f1b33d7e7dc3815b4b939d80'
    
    ciudades = ciudad.objects.all()
    weather_data = []
    for c in ciudades:
         r = requests.get(url.format(c)).json()
         
         if(r['cod']!='404'):
              city_weather = {
               'city' : c.nombre,
               'codigo': c.pk,
               'temperature' : r['main']['temp'],
               'description' : r['weather'][0]['description'],
               'icon' : r['weather'][0]['icon'],
               }  
              weather_data.append(city_weather)
         
         else:
              print('error')
     
    context = {'weather_data' : weather_data }
    return render(request, 'intex.html',context)

class cambiarestilo(LoginRequiredMixin,UpdateView):
     model=Usuario
     form_class=cambio
     template_name='registration/edit_profile.html'
     success_url=reverse_lazy('home')
     def get_object(self):
          return self.request.user.usuario
    

class editprofile(LoginRequiredMixin,UpdateView):
     form_class=edit_profile
     template_name='registration/edit_profile.html'
     success_url=reverse_lazy('home')
     
     def get_object(self):
          return self.request.user

class registrarPreguntas(LoginRequiredMixin,CreateView):
     model=faqs
     template_name='preguntas.html'
     fields='__all__'
     success_url=reverse_lazy('preguntas')

class editarPregunta(LoginRequiredMixin,UpdateView):
     model=faqs
     template_name='preguntas.html'
     fields='__all__'
     success_url=reverse_lazy('preguntas')

class eliminarPregunta(LoginRequiredMixin,DeleteView):
     model=faqs
     template_name='del-preguntas.html'
     fields='__all__'
     success_url=reverse_lazy('preguntas')

class preguntas(ListView):
     queryset=faqs.objects.all()
     template_name='faqs.html'
     paginate_by=10

def perfiles(request):
     return render(request,'registration/accounts_profile.html')

class postlista(ListView): 
     queryset=articulo_Cientifico.objects.filter(estado=1)
     template_name='articulos.html'
     paginate_by = 3

class listaArticulosUsuarios(LoginRequiredMixin,ListView):
     queryset=articulo_Cientifico.objects.all()
     template_name='articles-all.html'
     paginate_by = 3
      


class eliminar(LoginRequiredMixin,DeleteView):
     model=articulo_Cientifico
     template_name='deleteArticulo.html'
     slug_field ='url'
     slug_url_kwarg = 'url'
     success_url=reverse_lazy('articulos')
     

class ArticleDetailView(DetailView):
     model=articulo_Cientifico
     template_name='article_details.html'
     slug_field ='url'
     slug_url_kwarg = 'url'

   
class addArticulo(LoginRequiredMixin,CreateView):
     model=articulo_Cientifico
     template_name='formulario.html'
     form_class=formulario1
     #fields='__all__'
     success_url=reverse_lazy('articulos')

class Editarticulo(LoginRequiredMixin,UpdateView):
     model=articulo_Cientifico
     template_name='modificararticulo.html'
     slug_field ='url'
     slug_url_kwarg ='url'
     form_class=formulario3
     success_url=reverse_lazy('articulos')



class addUsuario(CreateView):
      model=Usuario
      template_name='usuarios.html'
      form_class=formulario2
      success_url=reverse_lazy('articulos')

def triple(request):
     return render(request,'Datos.html')

def vistaTabla(request):
     return render(request,'vistaTabla.html',{'obj':articulo_Cientifico.objects.all()})


def home(request):
     return render(request,'home.html')

def about(request):
     return render(request,'about.html')

def ret(request):
     return render(request,'charts.html')

def ciudadconsulta(request):
     return render(request,'predicciones.html')

def causa(request):
     return render(request,'causa.html')

def efecto(request):
     return render(request,'efecto.html')

def  evidencia(request):
     return render(request,'evidencia.html')

class menu(LoginRequiredMixin,ListView):
     model=OpcionesMenu
     template_name='menu.html'
     def get_queryset(self):
        return OpcionesMenu.objects.filter(Codigo_menu__gte=self.request.user.usuario.rol.Codigo_menu).order_by('Opcion')

class usuariostodos(UserPassesTestMixin,LoginRequiredMixin,SingleTableView):
     model=User
     template_name='tabla1.html'
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu==1

class elementosdeMenu(UserPassesTestMixin,LoginRequiredMixin,ListView):
     model=OpcionesMenu
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu==1
     template_name='elementosmenu.html'
class editElementoMenu(UserPassesTestMixin,LoginRequiredMixin,UpdateView):
     model=OpcionesMenu
     fields='__all__'
     success_url=reverse_lazy('listamenu')
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu==1
     template_name='editelemento.html'
class creaElementoMenu(LoginRequiredMixin,CreateView,UserPassesTestMixin):
     model=OpcionesMenu
     fields='__all__'
     template_name='crearelementomenu.html'
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu==1
class eliminarElementoMenu(UserPassesTestMixin,LoginRequiredMixin,DeleteView):
     model=OpcionesMenu
     template_name='deleteopcionmenu.html'
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu==1
     fields='__all__'
     success_url=reverse_lazy('listamenu')

class listarUsuario(UserPassesTestMixin,LoginRequiredMixin,ListView):
     model=Usuario
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu==1
     template_name='listausuario.html'

def recursos(request):
     return render(request,'recursosmultimedia.html')
def contacto(request):
     return render(request,'contacto.html')


class listarRoles(UserPassesTestMixin,ListView,LoginRequiredMixin):
     model=Menu
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu<=2
     template_name='listaroles.html'

class editarRoles(UserPassesTestMixin,LoginRequiredMixin,UpdateView):
     model=Menu
     form_class=roleditar
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu<=2
    
     template_name='editarrol.html'

class crearRol(UserPassesTestMixin,LoginRequiredMixin,CreateView):
     model=Menu
     form_class=roleditar
     def test_func(self):
          return self.request.user.usuario.rol.Codigo_menu==1
     template_name='editarrol.html'


