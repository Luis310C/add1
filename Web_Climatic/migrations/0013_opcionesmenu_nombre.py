# Generated by Django 3.1 on 2020-11-23 23:34

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Web_Climatic', '0012_auto_20201123_1654'),
    ]

    operations = [
        migrations.AddField(
            model_name='opcionesmenu',
            name='nombre',
            field=models.TextField(default='fdks'),
            preserve_default=False,
        ),
    ]
