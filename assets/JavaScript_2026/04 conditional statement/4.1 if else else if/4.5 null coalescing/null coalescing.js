 // Null coalescing Operator কি?
 // নাল কোয়ালেসিং ওপারেটর ( ??) কিছুটা অর ( || )  operator এর মত কাজ করে। নাল কোয়ালেসিং ওপারেটর শুধুমাত্র দুইটি ফলসি ভ্যালু নিয়ে কাজ করে। তা হলো null & undefined

 let = value = null;

 console.log(value || 10);
 console.log(value ?? 10);

 let profilePicture = undefined;
 let defaultPictrue = "avatar.png";
 profilePicture ?? defaultPictrue;

 let userName = undefined;
 console.log(userName ?? "Guest");
