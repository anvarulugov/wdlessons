# Web development darslari
Web development darslari

# O'rnatish
1. Loyihani klon qilib oling:
```
git clone https://github.com/anvarulugov/wdlessons.git
```
2. Composer paketlarni o'rnating:
```
composer install
```

# MVC
- Model - Ma'lumotlar bazasi bilan ishlashga aloqador kodlar
- View - HTML kodlar, foydalanuvchi interfeysini yasash uchun
- Controller - Murojaatlar bo'yicha kerakli kodlarni ishga tushirishga mas'ul qism

# Paketlar
- Router https://github.com/skipperbent/simple-php-route

# Qo'shimcha
- DRY - Do not repeat yourself

# Database - PDO
- SELECT - ma'lumotlar bazasidan kerakli ma'lumotlarni olish
- INSERT - ma'lumotlar bazasiga yangi ma'lumotlarni kiritish
- UPDATE - ma'lumotlar bazasidagi mavjud ma'lumotlarni tahrirlash
- DELETE - ma'lumotlar bazasidan belgilangan ma'lumotlarni o'chirish
- Structure:
-- tasks:
--- id (integer)
--- assined (integer) user_id
--- task (text)
--- status (bool|tinyint) 0: todo, 1: in progress, 2: finished
--- date (datetime) crated date 0000-00-00 00-00-00
--- deadline (datetime) expire date 0000-00-00 00-00-00