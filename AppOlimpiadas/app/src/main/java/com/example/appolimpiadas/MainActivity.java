package com.example.appolimpiadas;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    private String CContraseña = "Usuario";
    private String usuario = "Lucardini";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Intent IniciarSesion = new Intent(this, PantallaPrincipal.class);
        Intent CrearU = new Intent(this, CrearUsuario.class);
        Intent Entrarde1 = new Intent(this, PantallaPrincipal.class);

        TextView Cartel     = (TextView) findViewById(R.id.Cartel);
        EditText Nombre     = (EditText) findViewById(R.id.UsuarioParaIngresar);
        EditText contraseña = (EditText) findViewById(R.id.ingresacontraseña);

        Button iNICIAR       = (Button) findViewById(R.id.InicioSesion);
        TextView cartelCrear = (TextView) findViewById(R.id.cartelcrear);
        Button Crear         = (Button) findViewById(R.id.Crearusuario);

        Button Entrar        = (Button) findViewById(R.id.Entrarde1);

        Crear.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(CrearU);
            }
        });

        Entrar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(Entrarde1);
            }
        });

        iNICIAR.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                if ((contraseña.getText().toString()).equals(CContraseña)  && (Nombre.getText().toString()).equals(usuario))
                {

                    startActivity(IniciarSesion);
                }
            }
        });

    }
}