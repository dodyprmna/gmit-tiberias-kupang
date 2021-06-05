package com.example.gmit_tiberias_kupang.fcm;

import android.app.NotificationChannel;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.app.Service;
import android.content.Context;
import android.content.Intent;
import android.nfc.Tag;
import android.os.Build;
import android.os.IBinder;
import android.util.Log;

import androidx.annotation.NonNull;
import androidx.core.app.NotificationCompat;

import com.example.gmit_tiberias_kupang.Activity.Home;
import com.example.gmit_tiberias_kupang.Activity.MainActivity;
import com.example.gmit_tiberias_kupang.R;
import com.google.firebase.messaging.FirebaseMessagingService;
import com.google.firebase.messaging.RemoteMessage;

import static android.app.PendingIntent.getActivity;
import static android.content.ContentValues.TAG;

public class NotifService extends FirebaseMessagingService {

	@Override
	public void onMessageReceived(RemoteMessage remoteMessage) {
		super.onMessageReceived(remoteMessage);

		// tampilkan di log
		Log.d(TAG, "From"+remoteMessage.getFrom());
		// cek apakah notif null/tidak
		if(remoteMessage.getNotification() != null){
			Log.d(TAG, "Pesan FCM : "+remoteMessage.getNotification().getBody());

			// tampil notif
			showNotif(remoteMessage);
		}
	}

	private String channelId = "Default";
	private void showNotif(RemoteMessage remoteMessage) {
		Intent intent = new Intent(this, Home.class);
		intent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);

		PendingIntent pendingIntent = PendingIntent.getActivity(this, 0, intent, PendingIntent.FLAG_ONE_SHOT);

		NotificationCompat.Builder builder = new NotificationCompat.Builder(this, channelId)
				.setSmallIcon(R.mipmap.ic_launcher_round)
				.setContentTitle(remoteMessage.getNotification().getTitle())
				.setContentText(remoteMessage.getNotification().getBody())
				.setAutoCancel(true)
				.setPriority(NotificationCompat.PRIORITY_DEFAULT)
				.setContentIntent(pendingIntent);

		NotificationManager manager = (NotificationManager)getSystemService(Context.NOTIFICATION_SERVICE);
		if(Build.VERSION.SDK_INT >= Build.VERSION_CODES.O){
			NotificationChannel channel = new NotificationChannel(channelId, "Default Channel", NotificationManager.IMPORTANCE_DEFAULT);
			manager.createNotificationChannel(channel);
		}
		// trigger notif
		manager.notify(0, builder.build());
	}
}
