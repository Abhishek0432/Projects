# Generated by Django 4.0.5 on 2022-07-03 12:15

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('app', '0003_remove_addbrands_ap_description'),
    ]

    operations = [
        migrations.CreateModel(
            name='AddVendors',
            fields=[
                ('av_id', models.AutoField(primary_key=True, serialize=False, unique=True)),
                ('av_name', models.CharField(max_length=100)),
                ('av_mobile', models.CharField(max_length=100)),
                ('av_email', models.CharField(max_length=100)),
                ('av_password', models.CharField(max_length=100)),
                ('av_role', models.CharField(max_length=100)),
                ('av_status', models.IntegerField(default=0)),
                ('av_created_by', models.CharField(default='', max_length=100)),
            ],
        ),
    ]
