from django import forms
from .models import articulo_Cientifico,Usuario
from django.forms import Textarea


class formulario1(forms.ModelForm):
   
    class Meta:
        model=articulo_Cientifico

        fields=('titulo','url','autor','descripcion','contenido','estado','image')
        widgets={
            'titulo':forms.TextInput(attrs={"class":"form-control"}),
            'url':forms.TextInput(attrs={"class":"form-control"}),
            'autor':forms.Select(attrs={"class":"form-control"}),
            'estado':forms.Select(attrs={"class":"form-control"}),
            'image':forms.FileInput(attrs={"class":"form-control"}),
            'descripcion':Textarea(attrs={"class":"form-control"})
        }

class formulario3(forms.ModelForm):
   
    class Meta:
        model=articulo_Cientifico

        fields=('titulo','url','autor','descripcion','contenido','estado','image')
        widgets={
            'titulo':forms.TextInput(attrs={"class":"form-control"}),
            'url':forms.TextInput(attrs={"class":"form-control"}),
            'autor':forms.Select(attrs={"class":"form-control"}),
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
