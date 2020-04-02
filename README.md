# RoPi-Wireless-Data-Transfer Nedir?
Kablosuz olarak Laragon Web Sunucusunu ile Bilgisayardan Cep telefonuna Veya Cep telefonundan Bilgisayara veri aktarımı.

Wireless data transfer by RoPi

# Gerekli Dosyalar
Herhangi bir web sunucusu indirmeniz gerekmekte
1. [laragon.org](https://laragon.org/) * Tavsiye Edilen
2. [usbwebserver.net](https://www.usbwebserver.net/)
3. Bu GitHub prohesini indirmelisiniz.

# Nasıl Kurulur
Anlatım [laragon.org](https://laragon.org/)  üzerinden yapılmaktadır.
1. [laragon.org](https://laragon.org/) Web Sunucusunu indirip kuruyoruz(Türkçe Dil Mevcut)
... Ben Full Sürümü kullanıyorum
2. Laragon kurulduktan sonra bilgisayarınızı dilerseniz yeniden başlatabilirsiniz bu size kalmış.
3. Laragon kurulduktan sonra bu projeyi bilgisayarınıza indirin.
4. İndirdiğiniz dosyaların içinde php.ini dosyası var bunu `laragonunKuruluOlduguDizin/bin/php/php-7.2.19-Win32-VC15-x64/`(php-7.2.19-Win32-VC15-x64 klasörü sizde farklı olabilir önemli değil) içerisine atmadan önce orjinal php.ini dosyasının adını phpyedek.ini yapıp ardından php.ini dosyasını buraya atıyoruz.Örneğin bende C diskine kurulu `C:\laragon\bin\php\php-7.2.19-Win32-VC15-x64` 
5. Şimdi indirdiğimiz dosyaları `laragonunKuruluOlduguDizin/www/` dizinine atıyoruz ve Laragon programını çalıştırıyoruz.
6. Laragon penceresinde **Başlat** düğmesine tıklıyoruz ve sunucumuz aktif oluyor.
7. Tarayıcıyı açıp `localhost` yazarak tüm dosya transferlerinizi gerçekleştirebilirsiniz.

