from django import forms
from .models import articulo_Cientifico,Usuario
from django.forms import Textarea
from django.contrib.auth.models import User
from django.contrib.auth.forms import UserCreationForm
from .models import Estilo,Menu,Usuario


class registroForm(UserCreationForm):
    email=forms.EmailField(widget=forms.EmailInput(attrs={"class":"form-control"}))
    first_name=forms.CharField(max_length=100,widget=forms.TextInput(attrs={"class":"form-control"}))
    last_name=forms.CharField(max_length=100,widget=forms.TextInput(attrs={"class":"form-control"}))
   
    class Meta:
        model=User
        fields=('username','first_name','last_name','email','password1','password2')    
    def __init__(self,*args,**kwargs):
        super(registroForm,self).__init__(*args,**kwargs)
        self.fields['username'].widget.attrs['class']='form-control'
        self.fields['password1'].widget.attrs['class']='form-control'
        self.fields['password2'].widget.attrs['class']='form-control'
        


     
        
  
       

class registrar(forms.ModelForm):
    
    class Meta:
        model=Usuario
        fields=('Nombre','rol','Estilo')


class cambio(forms.ModelForm):
    
    class Meta:
        model=Usuario
        fields=['rol','Estilo']
        widgets={
            'rol':forms.Select(attrs={"class":"form-control"}),
            'Estilo':forms.Select(attrs={"class":"form-control"}),



        }







class formulario1(forms.ModelForm):
   
    class Meta:
        model=articulo_Cientifico

        fields=('titulo','autor','descripcion','contenido','estado','image')
        widgets={
            'titulo':forms.TextInput(attrs={"class":"form-control"}),
            'autor':forms.Select(attrs={"class":"form-control"}),
            'contenido':Textarea(attrs={"class":"form-control","cols":"65","rows":"20"}),
            'estado':forms.Select(attrs={"class":"form-control"}),
            'image':forms.FileInput(attrs={"class":"form-control"}),
            'descripcion':Textarea(attrs={"class":"form-control"})
        }

class formulario3(forms.ModelForm):
   
    class Meta:
        model=articulo_Cientifico

        fields=('titulo','autor','descripcion','contenido','estado','image')
        widgets={
            'titulo':forms.TextInput(attrs={"class":"form-control"}),
            'autor':forms.Select(attrs={"class":"form-control"}),
            'contenido':Textarea(attrs={"class":"form-control","cols":"65","rows":"20"}),
            'estado':forms.Select(attrs={"class":"form-control"}),
            'image':forms.FileInput(attrs={"class":"form-control"}),
            'descripcion':Textarea(attrs={"class":"form-control","rows":"20"})
        }
class formulario2(forms.ModelForm):
    class Meta:
        model=Usuario
        fields=('Nombre','rol','Estilo')
        widgets={
            
            'Nombre':forms.TextInput(attrs={"class":"form-control"}),
           
            'rol':forms.Select(attrs={"class":"form-control"}),
           
            'Estilo':forms.Select(attrs={"class":"form-control"}),
            
        }
