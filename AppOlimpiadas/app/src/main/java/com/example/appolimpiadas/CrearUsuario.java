package com.example.appolimpiadas;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class CrearUsuario extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_crear_usuario);

        Intent VolverAlInicioSesion = new Intent(this, MainActivity.class);

        EditText NombreUsuario     = (EditText) findViewById(R.id.Ingresesunombre);
        EditText Email             = (EditText) findViewById(R.id.Ingresesucorreo);
        EditText DNI               = (EditText) findViewById(R.id.IngreseDNI);
        EditText contraseña        = (EditText) findViewById(R.id.ContraseñaIngresadaParaCrear);

        Button CrearElUsuario      = (Button) findViewById(R.id.Crear_Usuario);
        Button VolverAlIniciar     = (Button) findViewById(R.id.Volver_atras);


        VolverAlIniciar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(VolverAlInicioSesion);
            }
        });


    }
}