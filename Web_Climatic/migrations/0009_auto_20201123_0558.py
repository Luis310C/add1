# Generated by Django 3.1 on 2020-11-23 05:58

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Web_Climatic', '0008_ciudad'),
    ]

    operations = [
        migrations.AlterField(
            model_name='ciudad',
            name='nombre',
            field=models.CharField(max_length=40, unique=True),
        ),
    ]
