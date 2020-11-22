from django.http import HttpResponse
from django.template import Template,Context
from django.template.loader import get_template
from django.shortcuts import render
from django.db import models
from django.urls import reverse_lazy
from .models import *
from .forms import *
from django.contrib.auth.forms import UserCreationForm,UserChangeForm
from django.contrib.auth.mixins import LoginRequiredMixin
from django.views.generic import ListView,DetailView,CreateView,UpdateView,DeleteView



class usuarioNuevo(CreateView):
     form_class=registroForm
     template_name='registration/register.html'
     success_url=reverse_lazy('login')


class estilo(LoginRequiredMixin,CreateView):
     form_class=registrar
     template_name='registration/register.html'
     success_url=reverse_lazy('login')
   


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

class preguntas(ListView):
     queryset=faqs.objects.all()
     template_name='faqs.html'



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
     success_url=reverse_lazy('/articulos')
     

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
     success_url=reverse_lazy('/articulos')

class Editarticulo(LoginRequiredMixin,UpdateView):
     model=articulo_Cientifico
     template_name='modificararticulo.html'
     slug_field ='url'
     slug_url_kwarg ='url'
     form_class=formulario3
     success_url=reverse_lazy('/articulos')



class addUsuario(CreateView):
      model=Usuario
      template_name='usuarios.html'
      form_class=formulario2
      success_url=reverse_lazy('/articulos')

def clima(request):
     return render(request,'clima.html')

def vistaTabla(request):
     return render(request,'vistaTabla.html',{'obj':articulo_Cientifico.objects.all()})


def home(request):
     
    

     return render(request,'home.html')

def about(request):

    
    
     return render(request,'about.html')


def despedida(request):
     
     return render(request,'vista1.html')

def ret(request):
     return render(request,'charts.html')

def ciudad(request):
     return render(request,'predicciones.html')

