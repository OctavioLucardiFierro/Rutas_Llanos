package com.example.appolimpiadas;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;

public class MostrarTurnos extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_mostrar_turnos);


        TextView dIA      = (TextView) findViewById(R.id.Dia);
        TextView HORA     = (TextView) findViewById(R.id.hORARIO);
        TextView dIRE     = (TextView) findViewById(R.id.Diraccion);
        TextView Dura     = (TextView) findViewById(R.id.Duracel);
        TextView Reco     = (TextView) findViewById(R.id.Recorrido);
        TextView guia     = (TextView) findViewById(R.id.NPC);

        TextView dIA1      = (TextView) findViewById(R.id.textView8);
        TextView HORA1     = (TextView) findViewById(R.id.textView9);
        TextView dIRE1     = (TextView) findViewById(R.id.textView2);
        TextView Dura1     = (TextView) findViewById(R.id.textView6);
        TextView Reco1     = (TextView) findViewById(R.id.textView10);
        TextView guia1     = (TextView) findViewById(R.id.textView11);

        TextView dIA2      = (TextView) findViewById(R.id.textView31);
        TextView HORA2     = (TextView) findViewById(R.id.textView32);
        TextView dIRE2     = (TextView) findViewById(R.id.textView33);
        TextView Dura2     = (TextView) findViewById(R.id.textView34);
        TextView Reco2     = (TextView) findViewById(R.id.textView35);
        TextView guia2     = (TextView) findViewById(R.id.textView36);

        TextView dIA3      = (TextView) findViewById(R.id.textView37);
        TextView HORA3     = (TextView) findViewById(R.id.textView38);
        TextView dIRE3     = (TextView) findViewById(R.id.textView39);
        TextView Dura3     = (TextView) findViewById(R.id.textView40);
        TextView Reco3     = (TextView) findViewById(R.id.textView41);
        TextView guia3     = (TextView) findViewById(R.id.textView42);



    }
}