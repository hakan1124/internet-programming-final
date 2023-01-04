-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2023, 15:20:19
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `antique`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikler`
--

CREATE TABLE `icerikler` (
  `icerik_tarih` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `seo` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `konu` varchar(100) NOT NULL,
  `metin` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerikler`
--

INSERT INTO `icerikler` (`icerik_tarih`, `id`, `seo`, `img`, `konu`, `metin`) VALUES
('2022-03-26 00:00:00', 1, 'kent-tarihi-muzesi', 'img/kent.jpg', 'Kent Tarihi Müzesi', 'Germiyan Sokak\'ta bulunan ve kitabesinden 1912 yılında yaptırıldığı anlaşılan Şapçızade ve Karaca Konakları, Kütahya Belediyesi tarafından restore edilerek, Kültür ve Turizm Bakanlığı\'ndan alınan özel müze izni ile Kent Tarihi Müzesi olarak açılmıştır. Bahçesinde; dünya’da Çini sanatının merkezi olan Kütahya’mızın geleneksel ata sanatının üretim aşamaları yer almaktadır.\r\n\r\nKent Tarihi Müzesi’nin zemin katında, tarih öncesi dönemden başlayarak, Hitit, Frig, Roma, Bizans, Selçuklu, Germiyan, Osmanlı ve Türkiye Cumhuriyeti\'ne ait bilgi, belge ve fotoğraflar bulunmaktadır. Birinci katında Kütahya’da kaybolmaya yüz tutmuş mesleklerden olan demirci, bakırcı, kalaycı, keçeci, sepetçi, dülger, bıçakçı, semerci, nalbant, saraç, kunduracı gibi meslek gurupları, bölümler halinde mankenlerle ve fotoğraflarla canlandırılmış olup, bunlara ait aletlerin orjinallerine ait dükkanlar yer almaktadır. İkinci katta ise, Kütahya’da ki ev yaşamı ve konaktaki odaların iç mekanları gelin, düğün, kına, selamlık, giysiler, yatak odası, mutfak ve halı dokumacılığı gibi günlük hayat canlandırılmıştır.'),
('2022-04-26 22:58:08', 2, 'lajos-kossuth-muzesi', 'img/lajos.jpg', 'Lajos Kossuth Müzesi', '18\'inci yüzyıl Türk evidir. Halk arasında Macar Evi olarak da bilinir. Macar özgürlük savaşının önderlerinden Lajos Kossuth (1802-1894), ailesi ve 56 kişilik mülteci grubuyla birlikte 1850-1851 yılları arasında Kütahya’ da misafir edilmiş ve Macaristan Anayasa Tasarısını bu evde hazırlamıştır. Bahçe içinde yer alan iki katlı ve yedi odası olan ahşap ev, Kültür ve Turizm Bakanlığı tarafından restore edilmiş, Lajos Kossuth anısına müze olarak düzenlenerek 19 Eylül 1982 tarihinde ziyarete açılmıştır. Müzede Lajos Kossuth’a ait eşyalar ile klasik Türk evine ait etnografik kültür varlıkları sergilenmektedir. '),
('2018-03-26 22:58:08', 4, 'anadolu-kultur-sanat-ve-arkeoloji-muzesi', 'img/anadolu.jpg', 'Anadolu Kültür Sanat Ve Arkeoloji Müzesi', 'İl merkezinde, Kütahya Hava Er Eğitim Tugay Komutanlığı bünyesinde Kültür ve Turizm Bakanlığı\'ndan alınan izinle kurulmuş olup özel müze statüsündedir. Eski uçak hangarının düzenlenmesiyle oluşturulmuştur. Müzede Kütahya Müzesi\'nin taş eserleri ile Müzenin kendisine ait arkeolojik eserleri, sikkeleri, çinileri ve Kütahyalı sanatçıların yağlı boya tabloları sergilenmektedir. Müze 2005 yılında ziyarete açılmıştır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(20) NOT NULL,
  `icerik_id` int(20) NOT NULL,
  `kullanici_ad` varchar(50) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `yorum` varchar(280) NOT NULL,
  `yorum_alt` int(20) NOT NULL,
  `tarih` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `icerik_id`, `kullanici_ad`, `mail`, `yorum`, `yorum_alt`, `tarih`) VALUES
(5, 2, 'Ahmet', 'ahmet@comment.com', 'Gezgör ailesine çok teşekkür ederim. Gerçekten akılda kalıcı bir gezi oldu.', 0, '2023-01-04 16:14:30'),
(6, 1, 'İsmail', 'ismail@comment.com', 'Tur rehberimizden çok memnun kaldım. Çabaları için teşekkür ederim.', 0, '2023-01-04 16:40:45'),
(7, 4, 'Melih', 'melih@comment.com', 'Bizi eşsiz değerler ile buluşturan herkese çok teşekkür ederim. Güzel bir geziydi.', 0, '2023-01-04 16:41:29');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerikler`
--
ALTER TABLE `icerikler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo` (`seo`),
  ADD UNIQUE KEY `seo_2` (`seo`),
  ADD UNIQUE KEY `seo_3` (`seo`),
  ADD KEY `img_3` (`img`),
  ADD KEY `img_4` (`img`);
ALTER TABLE `icerikler` ADD FULLTEXT KEY `img` (`img`);
ALTER TABLE `icerikler` ADD FULLTEXT KEY `img_2` (`img`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerikler`
--
ALTER TABLE `icerikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
