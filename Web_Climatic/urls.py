"""Web_Climatic URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from django.conf import settings
from django.conf.urls.static import static
from django.contrib.auth import urls
from django.conf.urls import include
from .views import *


urlpatterns = [
    path('admin/', admin.site.urls),
    path('inicio/c/',despedida),
    path('',home),
    path('articulos/',postlista.as_view(),name='/articulos'),
    path('articulos-all/',listaArticulosUsuarios.as_view(),name='articulos-all'),
    path('articulo/<slug:url>/',ArticleDetailView.as_view(),name='article-details'),
    path('registrar/',usuarioNuevo.as_view(),name='register'),
    path('eliminar/<slug:url>/',eliminar.as_view(),name='eliminar'),
    path('add/',addArticulo.as_view(),name='add'),
    path('clima/',clima),
    path('accounts/',include('django.contrib.auth.urls')),
    path('articulo/edit/<slug:url>/',Editarticulo.as_view(),name='edit')
] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)