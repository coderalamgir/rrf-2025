

--MySQL এ দুইভাবে কমেন্ট করা যায়।

--সিঙ্গেল লাইন কমেন্ট।

/*অনেক লাইন কমেন্ট
অনেক লাইন কমেন্ট
অনেক লাইন কমেন্ট */

CREATE DATABASE shop;  -- shop নামে নতুন ডাটাবেজ তৈরি করলাম।



--SQL = Structured Query Language  কাঠামোবদ্ধ অনুসন্ধান ভাষা।

--প্রতিটা sql statement এর শেষে ; সেমিকোলন দিতে হয়।

SELECT * FROM students_details; --এখানে * অর্থ সব কলাম বাছায় কর students_details টেবিল থেকে।

SELECT Roll,fullName FROM students_details; --এখানে Roll এবং fullName কলাম এর সকল তথ্য দেখাবে students_details টেবিল থেকে।

 SELECT DISTINCT City FROM customers; --এখানে DISTINCT এর সাহায্যে নির্দিষ্ট কলাম এর শহর আলাদা করে দেখাবে students_details টেবিল থেকে। একই শহরের নাম একের অধিক থাকলেও তা একবারই দেখাবে।

  SELECT COUNT(DISTINCT City) FROM customers; --এখানে COUNT(DISTINCT City) এর সাহায্যে নির্দিষ্ট কলাম মোট কতগুলো শহরের ক্রেতা আছে তা দেখাবে students_details টেবিল থেকে। একই শহরের নাম একের অধিক থাকলেও তা একবারই দেখাবে।





