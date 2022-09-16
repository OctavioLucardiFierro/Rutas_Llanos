package com.example.appolimpiadas;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ImageView;
import android.widget.ViewFlipper;

public class PantallaPrincipal extends AppCompatActivity {

    ViewFlipper v_flipper;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pantalla_principal);

        int imagenes[]= {R.drawable.imagen1, R.drawable.imagen2, R.drawable.imagen3, R.drawable.imagen4, R.drawable.imagen5};
        v_flipper = findViewById(R.id.Visor);

        for (int image: imagenes){
            flipperImagenes(image);
        }
    }

    public void flipperImagenes(int imagen)
    {
        ImageView imageView = new ImageView(this);
        imageView.setBackgroundResource(imagen);

        v_flipper.addView(imageView);
        v_flipper.setFlipInterval(3000); //3000= 1 seg
        v_flipper.setAutoStart(true);

        v_flipper.setInAnimation(this, android.R.anim.slide_out_right);
        v_flipper.setInAnimation(this, android.R.anim.slide_in_left);

    }
}