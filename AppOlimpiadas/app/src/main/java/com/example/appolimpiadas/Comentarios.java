package com.example.appolimpiadas;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.app.VoiceInteractor;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.lang.ref.ReferenceQueue;
import java.util.HashMap;
import java.util.Map;

public class Comentarios extends AppCompatActivity {
    EditText NombreCome;
    EditText Tucomentario;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_comentarios);

        NombreCome     = (EditText) findViewById(R.id.NombreCom);
        Tucomentario   = (EditText) findViewById(R.id.ComentarioUsuiario);


        Button ComentateEsta = (Button) findViewById(R.id.ComentameEstaBot);

        ComentateEsta.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                    EjecutarComentario("http://192.168.1.109:8080/Rutas_Llanos/php/InsertDesdeApp.php");
            }
        });
    }

    private void EjecutarComentario (String URL){
        StringRequest stringRequest = new StringRequest(Request.Method.POST, URL, new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                Toast.makeText(getApplicationContext(), "Operacion Exitosa", Toast.LENGTH_SHORT).show();
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(getApplicationContext(),error.toString(),Toast.LENGTH_SHORT).show();
            }
        }){
            @Nullable
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map <String,String> parametros = new HashMap<String, String>();
                parametros.put("nombre",NombreCome.getText().toString());
                parametros.put("comentario",Tucomentario.getText().toString());

                return super.getParams();
            }
        };
        RequestQueue requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(stringRequest);

    }
}