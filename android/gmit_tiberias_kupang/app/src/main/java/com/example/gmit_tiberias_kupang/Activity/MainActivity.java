package com.example.gmit_tiberias_kupang.Activity;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.example.gmit_tiberias_kupang.R;

public class MainActivity extends AppCompatActivity {

    EditText emailuser, password; //deklarasi objek dr class EditText

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button login = (Button) findViewById(R.id.button_login);
        emailuser = (EditText) findViewById(R.id.edit_email);
        password = (EditText) findViewById(R.id.edit_password);
        TextView signupLink = (TextView) findViewById(R.id.signupLink);

        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String email = emailuser.getText().toString();
                String pass = password.getText().toString();
                if ((email!=null)&&(pass!=null)) {
                    //jika login berhasil
                    Toast.makeText(getApplicationContext(), "Login Sukses",
                            Toast.LENGTH_SHORT).show();
                    Intent intent = new Intent(MainActivity.this, Home.class);
                    startActivity(intent);
                }
                else if ((email.matches("")||pass.matches(""))) {
                    Toast.makeText(getApplicationContext(), "Username dan Password harus di Isi",
                            Toast.LENGTH_SHORT).show();
                }
                else {
                    //jika login gagal
                    AlertDialog.Builder builder = new AlertDialog.Builder(MainActivity.this);
                    builder.setMessage("Username atau Password Anda Salah!")
                            .setNegativeButton("Back", null).create().show();
                }
            }

        });

        signupLink.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {
                // Start the Signup activity
                Intent intent = new Intent(MainActivity.this, Register_activity.class);
                startActivity(intent);
//                finish();
//                overridePendingTransition(R.anim.);
            }
        });

    }
}