from django.db import models
from ckeditor.fields import RichTextField
from django.utils.text import slugify
from .settings import STATIC_URL
from django.contrib.auth.models import User




estatus = (
    (0,"borrador"),
    (1,"Publicado")
)


class Menu(models.Model):
   Codigo_menu=models.BigAutoField(primary_key=True,null=False,blank=False)
   Nombre_Menu=models.CharField(max_length=35,unique=True)
   def __str__(self):
      return self.Nombre_Menu




class OpcionesMenu(models.Model):
     Codigo_Opcion=models.BigIntegerField(primary_key=True)
     Opcion=models.CharField(max_length=35)
     Codigo_menu=models.ForeignKey(Menu,on_delete=models.CASCADE)

class Estilo(models.Model):
    Codigo_estilo=models.BigIntegerField(primary_key=True)
    Nombre=models.CharField(max_length=30,null=True)
    ruta=models.CharField(max_length=50)
    def __str__(self):
        return self.Nombre

class Usuario(models.Model):
     
      Nombre=models.OneToOneField(User,null=True,on_delete=models.CASCADE)
      rol=models.ForeignKey(Menu,on_delete=models.CASCADE)
      Estilo=models.ForeignKey(Estilo,on_delete=models.CASCADE)
      def __str__(self):
        return self.Nombre.username


class articulo_Cientifico(models.Model):
     titulo=models.CharField(max_length=200,unique=True)
     url=models.SlugField(max_length=200,unique=True)
     descripcion=models.TextField()
     creacion=models.DateTimeField(auto_now_add=True)
     modificacion=models.DateTimeField(auto_now=True)
     autor=models.ForeignKey(User,on_delete=models.CASCADE,related_name='posteo',null=True)
     contenido=RichTextField()
     image = models.ImageField(null=True)
     estado=models.IntegerField(choices=estatus,default=0)
     class Meta:
          ordering=['-creacion']
     def __str__(self):
        return self.titulo

     def save(self,*args,**kwargs):
          self.url=slugify(self.titulo)
          super().save(*args,**kwargs)
  
       





     
     


