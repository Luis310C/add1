# Generated by Django 3.1 on 2020-11-11 20:33

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('Web_Climatic', '0005_auto_20201104_2251'),
    ]

    operations = [
        migrations.AlterField(
            model_name='articulo_cientifico',
            name='autor',
            field=models.ForeignKey(null=True, on_delete=django.db.models.deletion.CASCADE, related_name='posteo', to='Web_Climatic.usuario'),
        ),
    ]
