package com.example.gmit_tiberias_kupang.Activity;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.cardview.widget.CardView;
import androidx.recyclerview.widget.RecyclerView;

import com.example.gmit_tiberias_kupang.R;
import com.squareup.picasso.Picasso;

import java.util.ArrayList;

public class Adapter_berita extends RecyclerView.Adapter<Adapter_berita.ExampleViewHolder> {

	private ArrayList<Item_berita> mItem_berita;
	private String imageurl="http://192.168.0.20/gmit-tiberias-kupang/uploads/berita/";

	public static class ExampleViewHolder extends RecyclerView.ViewHolder{
		public ImageView mImageView;
		public TextView mTextView1;
		public TextView mTextView2;
		public CardView cvMain;


		public ExampleViewHolder(View itemView) {
			super(itemView);
			mImageView = itemView.findViewById(R.id.img_berita);
			mTextView1 = itemView.findViewById(R.id.judul_berita);
			mTextView2 = itemView.findViewById(R.id.isi_berita);
			cvMain = itemView.findViewById(R.id.cv_berita);
		}
	}

	public Adapter_berita(ArrayList<Item_berita> exampleList_berita){
		mItem_berita = exampleList_berita;
	}

	@Override
	public ExampleViewHolder onCreateViewHolder(ViewGroup viewGroup, int i) {
		View v = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.item_berita, viewGroup, false);
		ExampleViewHolder evh = new ExampleViewHolder(v);
		return evh;
	}

	@Override
	//i menunjukan index / posisi item dalam arraylist
	public void onBindViewHolder(ExampleViewHolder exampleViewHolder,int i) {
		Item_berita currentItem = mItem_berita.get(i);

		Picasso.get()
				.load(imageurl+currentItem.getNama_file())
				.resize(150,150)
				.centerCrop()
				.into(exampleViewHolder.mImageView);

		exampleViewHolder.mTextView1.setText(currentItem.getJudul_berita());
		exampleViewHolder.mTextView2.setText(currentItem.getIsi_berita());
	}

	@Override
	public int getItemCount() {
		return mItem_berita.size();
	}





}
