# Generated by Django 4.2.3 on 2023-08-15 18:03

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('app', '0013_review'),
    ]

    operations = [
        migrations.AddField(
            model_name='review',
            name='rv_pg_id',
            field=models.CharField(default='', max_length=100),
        ),
    ]
