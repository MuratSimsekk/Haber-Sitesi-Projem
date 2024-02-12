-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 May 2023, 21:12:23
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `habersite`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ID` int(11) NOT NULL,
  `LOGO` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ID`, `LOGO`) VALUES
(3, 0x2e2e2f4c6f676f496d672f6c6f676f2e504e47);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `ID` int(11) NOT NULL,
  `BASLIK` varchar(1000) NOT NULL,
  `ICERIK` varchar(10000) NOT NULL,
  `KAPAKRESMI` longblob NOT NULL,
  `KATEGORI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`ID`, `BASLIK`, `ICERIK`, `KAPAKRESMI`, `KATEGORI`) VALUES
(53, ' Multiplayer The Last of Us Oyununun Hazır Olmadığını Açıkladı.', '2013 yılında ilk oyunu, 2020’de ise ikinci oyunu çıkış yapan The Last of Us, son zamanların en başarılı oyun serilerinden biriydi. Bu yıl çıkan HBO imzalı başarılı dizi uyarlaması da oyunun iyice popülerleşmesini sağlamıştı.\r\n\r\nGeliştirici Naughty Dog, geçtiğimiz yıl hayranların uzun süredir beklediği haberi vermiş ve The Last of Us evreninde geçen ayrı bir multiplayer oyunun geleceğini duyurmuştu. Aslında bu oyunun, geçtiğimiz günlerde düzenlenen PlayStation Showcase etkinliğinde gösterilmesi bekleniyordu; ancak bu yaşanmadı. Oyunseverlerin meraklı bekleyişi sürerken Naughty Dog’tan açıklama geldi.\r\n\r\n2013 yılında ilk oyunu, 2020’de ise ikinci oyunu çıkış yapan The Last of Us, son zamanların en başarılı oyun serilerinden biriydi. Bu yıl çıkan HBO imzalı başarılı dizi uyarlaması da oyunun iyice popülerleşmesini sağlamıştı.\r\n\r\nGeliştirici Naughty Dog, geçtiğimiz yıl hayranların uzun süredir beklediği haberi vermiş ve The Last of Us evreninde geçen ayrı bir multiplayer oyunun geleceğini duyurmuştu. Aslında bu oyunun, geçtiğimiz günlerde düzenlenen PlayStation Showcase etkinliğinde gösterilmesi bekleniyordu; ancak bu yaşanmadı. Oyunseverlerin meraklı bekleyişi sürerken Naughty Dog’tan açıklama geldi.', 0x2e2e2f75706c6f6164732f4f59554e312e6a706567, 'OYUN'),
(54, 'İşte karşınızda İphone 15', '2013 yılında ilk oyunu, 2020’de ise ikinci oyunu çıkış yapan The Last of Us, son zamanların en başarılı oyun serilerinden biriydi. Bu yıl çıkan HBO imzalı başarılı dizi uyarlaması da oyunun iyice popülerleşmesini sağlamıştı. Geliştirici Naughty Dog, geçtiğimiz yıl hayranların uzun süredir beklediği haberi vermiş ve The Last of Us evreninde geçen ayrı bir multiplayer oyunun geleceğini duyurmuştu. Aslında bu oyunun, geçtiğimiz günlerde düzenlenen PlayStation Showcase etkinliğinde gösterilmesi bekleniyordu; ancak bu yaşanmadı. Oyunseverlerin meraklı bekleyişi sürerken Naughty Dog’tan açıklama geldi. 2013 yılında ilk oyunu, 2020’de ise ikinci oyunu çıkış yapan The Last of Us, son zamanların en başarılı oyun serilerinden biriydi. Bu yıl çıkan HBO imzalı başarılı dizi uyarlaması da oyunun iyice popülerleşmesini sağlamıştı. Geliştirici Naughty Dog, geçtiğimiz yıl hayranların uzun süredir beklediği haberi vermiş ve The Last of Us evreninde geçen ayrı bir multiplayer oyunun geleceğini duyurmuştu. Aslında bu oyunun, geçtiğimiz günlerde düzenlenen PlayStation Showcase etkinliğinde gösterilmesi bekleniyordu; ancak bu yaşanmadı. Oyunseverlerin meraklı bekleyişi sürerken Naughty Dog’tan açıklama geldi....', 0x2e2e2f75706c6f6164732f6d6f62696c312e6a706567, 'MOBİL'),
(55, ' Multiplayer The Last of Us Oyununun Hazır Olmadığını Açıkladı.', '2013 yılında ilk oyunu, 2020’de ise ikinci oyunu çıkış yapan The Last of Us, son zamanların en başarılı oyun serilerinden biriydi. Bu yıl çıkan HBO imzalı başarılı dizi uyarlaması da oyunun iyice popülerleşmesini sağlamıştı. Geliştirici Naughty Dog, geçtiğimiz yıl hayranların uzun süredir beklediği haberi vermiş ve The Last of Us evreninde geçen ayrı bir multiplayer oyunun geleceğini duyurmuştu. Aslında bu oyunun, geçtiğimiz günlerde düzenlenen PlayStation Showcase etkinliğinde gösterilmesi bekleniyordu; ancak bu yaşanmadı. Oyunseverlerin meraklı bekleyişi sürerken Naughty Dog’tan açıklama geldi. 2013 yılında ilk oyunu, 2020’de ise ikinci oyunu çıkış yapan The Last of Us, son zamanların en başarılı oyun serilerinden biriydi. Bu yıl çıkan HBO imzalı başarılı dizi uyarlaması da oyunun iyice popülerleşmesini sağlamıştı. Geliştirici Naughty Dog, geçtiğimiz yıl hayranların uzun süredir beklediği haberi vermiş ve The Last of Us evreninde geçen ayrı bir multiplayer oyunun geleceğini duyurmuştu. Aslında bu oyunun, geçtiğimiz günlerde düzenlenen PlayStation Showcase etkinliğinde gösterilmesi bekleniyordu; ancak bu yaşanmadı. Oyunseverlerin meraklı bekleyişi sürerken Naughty Dog’tan açıklama geldi....', 0x2e2e2f75706c6f6164732f6f746f6d6f62696c312e6a706567, 'OTOMOBİL'),
(56, 'Yapay zeka ile resmettik!', 'Alternatif evrendeki Türkiye\'nin distopik filmlerdeki/kitaplardaki ortamlardan bir farkı yok. İnsanlar mutsuz, hayat pahalılığı var, otoriter bir rejim hakim.\r\n\r\nHak, hukuk, adalet artık yok; muhaliflerin yönetimde olması yasak. 30 yıllık tek adam rejiminin ardından başa geçen yeni diktatör, önceki diktatörün akrabası ve 20 yıldır ülkenin başında.Alternatif evrendeki Türkiye\'nin distopik filmlerdeki/kitaplardaki ortamlardan bir farkı yok. İnsanlar mutsuz, hayat pahalılığı var, otoriter bir rejim hakim.\r\n\r\nHak, hukuk, adalet artık yok; muhaliflerin yönetimde olması yasak. 30 yıllık tek adam rejiminin ardından başa geçen yeni diktatör, önceki diktatörün akrabası ve 20 yıldır ülkenin başında.', 0x2e2e2f75706c6f6164732f74656b6e6f6c6f6a69312e6a706567, 'TEKNOLOJİ'),
(57, 'PlayStation Etkinliğinde Duyurulan Tüm Oyunlar', 'Oyun dünyasının heyecanla beklediği PlayStation Showcase etkinliği ardımızda kaldı. Etkinlikte dev oyun yapımcılarının PlayStation 5 ve 4 için geliştirdikleri en yeni oyunları gördük. Bu oyunlar arasında yeni Marvel\'s Spider-Man serisinin devam oyunu, Alan Wake 2, Metal Gear Solid: Snake Eater ve daha pek çok heyecanlandıran oyun yer aldı. Oyun dünyasının heyecanla beklediği PlayStation Showcase etkinliği ardımızda kaldı. Etkinlikte dev oyun yapımcılarının PlayStation 5 ve 4 için geliştirdikleri en yeni oyunları gördük. Bu oyunlar arasında yeni Marvel\'s Spider-Man serisinin devam oyunu, Alan Wake 2, Metal Gear Solid: Snake Eater ve daha pek çok heyecanlandıran oyun yer aldı.', 0x2e2e2f75706c6f6164732f6f79756e322e77656270, 'OYUN'),
(58, 'Twitter, API Erişimi İçin Aylık 42 Bin Dolar İstediği Akademisyenlere 30 Gün Süre Tanıdı', 'Twitter, Elon Musk yönetimine geçtikten sonra köklü değişikliklere uğramıştı. Daha önceleri ücretsiz olan Twitter API (uygulama programlama arayüzleri) erişiminin ücretli hâle getirilmesi de bunlardan biriydi.\r\n\r\nŞimdi ise bu konuda akademisyenleri ilgilendiren bir gelişme yaşandı. Akademisyenlerin API erişimi için aylık 42 bin dolarlık uçuk bir ücret ödemesini talep eden şirketin bunu yapmayanların verileri silmesini istiyor.Twitter, Elon Musk yönetimine geçtikten sonra köklü değişikliklere uğramıştı. Daha önceleri ücretsiz olan Twitter API (uygulama programlama arayüzleri) erişiminin ücretli hâle getirilmesi de bunlardan biriydi.\r\n\r\nŞimdi ise bu konuda akademisyenleri ilgilendiren bir gelişme yaşandı. Akademisyenlerin API erişimi için aylık 42 bin dolarlık uçuk bir ücret ödemesini talep eden şirketin bunu yapmayanların verileri silmesini istiyor.', 0x2e2e2f75706c6f6164732f6d6f62696c322e6a706567, 'MOBİL'),
(59, 'Togg T10X, 3.5 Milyon TL\'ye 2. El Satışa Çıkarıldı: RTÜK Soruşturma Başlattı!', 'ir süredir teslimat süreciyle gündemde olan yerli otomobil Togg T10X ile ilgili dikkat çeken bir gelişme yaşandı. Yerli otomobili satın alan bir vatandaş, daha 600 kilometredeki aracını ikinci el araç satış platformları üzerinden satmak istedi. Söz konusu araç sahibinin Togg T10X\'e tam 3.5 milyon TL istemesi internette konuşulmaya başlayan olay, RTÜK ile ilgili çıktı. Kurum, konuyla ilgili inceleme başlattığını duyurdu.ir süredir teslimat süreciyle gündemde olan yerli otomobil Togg T10X ile ilgili dikkat çeken bir gelişme yaşandı. Yerli otomobili satın alan bir vatandaş, daha 600 kilometredeki aracını ikinci el araç satış platformları üzerinden satmak istedi. Söz konusu araç sahibinin Togg T10X\'e tam 3.5 milyon TL istemesi internette konuşulmaya başlayan olay, RTÜK ile ilgili çıktı. Kurum, konuyla ilgili inceleme başlattığını duyurdu.ir süredir teslimat süreciyle gündemde olan yerli otomobil Togg T10X ile ilgili dikkat çeken bir gelişme yaşandı. Yerli otomobili satın alan bir vatandaş, daha 600 kilometredeki aracını ikinci el araç satış platformları üzerinden satmak istedi. Söz konusu araç sahibinin Togg T10X\'e tam 3.5 milyon TL istemesi internette konuşulmaya başlayan olay, RTÜK ile ilgili çıktı. Kurum, konuyla ilgili inceleme başlattığını duyurdu.ir süredir teslimat süreciyle gündemde olan yerli otomobil Togg T10X ile ilgili dikkat çeken bir gelişme yaşandı. Yerli otomobili satın alan bir vatandaş, daha 600 kilometredeki aracını ikinci el araç satış platformları üzerinden satmak istedi. Söz konusu araç sahibinin Togg T10X\'e tam 3.5 milyon TL istemesi internette konuşulmaya başlayan olay, RTÜK ile ilgili çıktı. Kurum, konuyla ilgili inceleme başlattığını duyurdu.', 0x2e2e2f75706c6f6164732f6f746f6d6f62696c322e6a706567, 'OTOMOBİL'),
(60, 'Öğrendiğiniz Zaman Size Pek Çok İş Fırsatı Yaratabilecek \'Kodlama\' Nedir', 'Hayatlarımız giderek daha fazla uygulamalar ve akıllı cihazlar etrafında şekilleniyor. Her geçen gün dizüstü bilgisayarlarımızda veya telefonlarımızda daha fazla zaman harcıyoruz. İşte bu kullandığımız teknolojik cihazların tümünün arka planında onların çalışmasını sağlayan kodlar bulunmaktadır.  Özellikle son yıllarda, kodlama alanında çok çeşitli iş fırsatları ortaya çıkmıştır. Her ne kadar farklı bir alanda çalışıyor olsanız bile, muhtemelen bu kod satırlarıyla karşılaşmışsınızdır. Kodlamanın tam olarak ne olduğunu ve nasıl yapıldığını merak ediyorsanız, bu soruların cevaplarını alabileceğiniz yazımızı okumaya devam edebilirsiniz.Hayatlarımız giderek daha fazla uygulamalar ve akıllı cihazlar etrafında şekilleniyor. Her geçen gün dizüstü bilgisayarlarımızda veya telefonlarımızda daha fazla zaman harcıyoruz. İşte bu kullandığımız teknolojik cihazların tümünün arka planında onların çalışmasını sağlayan kodlar bulunmaktadır.  Özellikle son yıllarda, kodlama alanında çok çeşitli iş fırsatları ortaya çıkmıştır. Her ne kadar farklı bir alanda çalışıyor olsanız bile, muhtemelen bu kod satırlarıyla karşılaşmışsınızdır. Kodlamanın tam olarak ne olduğunu ve nasıl yapıldığını merak ediyorsanız, bu soruların cevaplarını alabileceğiniz yazımızı okumaya devam edebilirsiniz.Hayatlarımız giderek daha fazla uygulamalar ve akıllı cihazlar etrafında şekilleniyor. Her geçen gün dizüstü bilgisayarlarımızda veya telefonlarımızda daha fazla zaman harcıyoruz. İşte bu kullandığımız teknolojik cihazların tümünün arka planında onların çalışmasını sağlayan kodlar bulunmaktadır.  Özellikle son yıllarda, kodlama alanında çok çeşitli iş fırsatları ortaya çıkmıştır. Her ne kadar farklı bir alanda çalışıyor olsanız bile, muhtemelen bu kod satırlarıyla karşılaşmışsınızdır. Kodlamanın tam olarak ne olduğunu ve nasıl yapıldığını merak ediyorsanız, bu soruların cevaplarını alabileceğiniz yazımızı okumaya devam edebilirsiniz.Hayatlarımız giderek daha fazla uygulamalar ve akıllı cihazlar etrafında şekilleniyor. Her geçen gün dizüstü bilgisayarlarımızda veya telefonlarımızda daha fazla zaman harcıyoruz. İşte bu kullandığımız teknolojik cihazların tümünün arka planında onların çalışmasını sağlayan kodlar bulunmaktadır.  Özellikle son yıllarda, kodlama alanında çok çeşitli iş fırsatları ortaya çıkmıştır. Her ne kadar farklı bir alanda çalışıyor olsanız bile, muhtemelen bu kod satırlarıyla karşılaşmışsınızdır. Kodlamanın tam olarak ne olduğunu ve nasıl yapıldığını merak ediyorsanız, bu soruların cevaplarını alabileceğiniz yazımızı okumaya devam edebilirsiniz.', 0x2e2e2f75706c6f6164732f74656b6e6f6c6f6a692e6a706567, 'TEKNOLOJİ'),
(61, 'Epic Games\'in Bu Haftaki Ücretsiz Oyunu Belli Oldu', 'Bu hafta ücretsiz verilen oyun, Bethesda\'nın efsane serisi Fallout\'ın bir oyunu olan Fallout New Wegas Ultimate Edition oldu. 2010 yılında çıkan ve Obisidian Entertainment tarafından geliştirilen RPG türündeki yapım, Fallout 3\'ün devamı niteliğinde.  Ultimate Edition, oyunculara tüm New Vegas içeriklerini ve eklentilerini sunuyor. Bu şekilde de çok sevilen Dead Money, Honest Hearts, Old World Blues ve Lonesome Road eklentileri de dahil tüm içeriklere tek paket içerisinde ulaşmak mümkün hâle geliyor.1 Haziran\'a kadar ücretsiz olacak oyunun normaldeki değeri ise 199 TL.Bu hafta ücretsiz verilen oyun, Bethesda\'nın efsane serisi Fallout\'ın bir oyunu olan Fallout New Wegas Ultimate Edition oldu. 2010 yılında çıkan ve Obisidian Entertainment tarafından geliştirilen RPG türündeki yapım, Fallout 3\'ün devamı niteliğinde.  Ultimate Edition, oyunculara tüm New Vegas içeriklerini ve eklentilerini sunuyor. Bu şekilde de çok sevilen Dead Money, Honest Hearts, Old World Blues ve Lonesome Road eklentileri de dahil tüm içeriklere tek paket içerisinde ulaşmak mümkün hâle geliyor.1 Haziran\'a kadar ücretsiz olacak oyunun normaldeki değeri ise 199 TL.Bu hafta ücretsiz verilen oyun, Bethesda\'nın efsane serisi Fallout\'ın bir oyunu olan Fallout New Wegas Ultimate Edition oldu. 2010 yılında çıkan ve Obisidian Entertainment tarafından geliştirilen RPG türündeki yapım, Fallout 3\'ün devamı niteliğinde.  Ultimate Edition, oyunculara tüm New Vegas içeriklerini ve eklentilerini sunuyor. Bu şekilde de çok sevilen Dead Money, Honest Hearts, Old World Blues ve Lonesome Road eklentileri de dahil tüm içeriklere tek paket içerisinde ulaşmak mümkün hâle geliyor.1 Haziran\'a kadar ücretsiz olacak oyunun normaldeki değeri ise 199 TL.', 0x2e2e2f75706c6f6164732f6f79756e332e6a706567, 'OYUN'),
(62, 'Apple, iOS 17\'yle Birlikte iPhone\'ları \"Akıllı Ekrana\" Dönüştürmeyi Planlıyor', 'Gurman’a göre şirketin iOS 17 ile tanıtmayı planladığı özellik, ekran kilitlendikten sonra işinize çok yarayacak widget’lar göstermeye başlayacak. iPhone’nu evlerde kullanılan akıllı ekranlara çevirecek bu yeniliğin, “Always on Display” özelliğini andırdığını; ancak daha işlevsel olduğunu söylemek mümkün.  Mark Gurman, konuya yakın kaynaklara dayandırdığı haberinde özelliğin ekran kilitlendiğinde ve telefon yatay olarak konumlandırıldığında kullanılacağını söylüyor. Arayüz, takvim, hava durumu, bildirimler ve daha fazlasının ekran kilitliyken göstereceğini de ekliyor. Gurman’a göre Apple’ın burada amacı, telefonu boşta dururken (masada durması gibi) daha yararlı hâle getirmek.  Benzer bir özellik, Google’ın Pixel cihazlarında vardı. Kilitli bir telefon bir Pixel standına yerleştirildiğinde hem şarj oluyor hem de fotoğraflar gibi birçok şeyi ekrandan gösterebiliyordu. Ayrıca Amazon tabletlerinde de böyle bir şey vardı. Apple’ın özellik için karanlık bir arka plan ve okunması daha kolay olacak parlak yazılar düşündüğünün söylendiğini de eklemeden geçmeyelim.', 0x2e2e2f75706c6f6164732f6d6f62696c332e6a706567, 'MOBİL'),
(63, 'Bugüne Kadarki En İyi Renault Otomobil ‘Austral’ Türkiye’de', 'Renault, geçtiğimiz yıl tanıttığı Austral isimli SUV modelini birkaç ay önce Türkiye\'de ön sipariş kapsamında satın alınabilir hale getirdi. Artık bu süreç sona erdi ve Renault, resmi satışların 1 Haziran 2023 tarihi itibarıyla başlayacağını duyurdu. Peki bu otomobilin güncel fiyatı ne kadar ve tüketicilere neler vadediyor?  Austral, Renault\'un son yıllardaki en dikkat çekici otomobillerinden bir tanesi. Zira Renault, Nissan ve Mitsubishi\'nin ortak olarak geliştirdiği CMF-CD isimli bir platform üzerine inşa edilen otomobil, daha ilk aylarında \"Avrupa\'da Yılın Otomobili Ödülü\" listesinde kendisine yer buldu. Ayrıca bu C-SUV, AUTOBEST tarafından \"2023 yılının en satın almaya değer otomobili\" olarak seçildi. Hal böyle olunca Renault, yeni SUV\'unu \"bugüne kadarki en iyi Renault\" olarak lanse ediyor.', 0x2e2e2f75706c6f6164732f6f746f6f6d6f62696c332e6a706567, 'OTOMOBİL'),
(64, 'NASA, İnsanlığı Ay\'a Götürecek Artemis V Görevinin İniş Aracı İçin Seçimini Yapt', 'Blue Origin Artemis görevleri için ilk kez yarışmadı. Bezos’un şirketi, 2021 yılında ilk insanlı görev olacak Artemis III (2025) için Elon Musk’ın şirketi SpaceX ile karşı karşıya gelmişti. NASA da 2,9 milyar dolar bedele sahip anlaşmayı SpaceX’e vermişti. Öte yandan NASA, SpaceX’in görevini genişleterek şirketin iniş aracının Artemis IV’te de kullanılacağını açıklamıştı.  Blue Origin, 2021’deki NASA kararının ardından görevin yalnızca tek şirkete verilmesine itiraz etmiş, hatta dava bile açmıştı. Ancak sonrasında itirazları reddedildi ve davayı kaybetti. Şimdiki kararla da Artemis görevlerinde SpaceX’le yarışma fırsatı yakaladı. NASA da yeni kararının, rekabeti artıracağını ifade etti.', 0x2e2e2f75706c6f6164732f74656b6e6f6c6f6a69332e6a706567, 'TEKNOLOJİ'),
(65, 'Kadın Oyuncuların Yüzde 75’i, Çevrimiçi Oyunlarda Tacize ve İstismara Uğruyor', 'Sky Broadband tarafından yapılan ankete katılan 4000 kadın oyuncunun yüzde 49\'u çevrimiçi yayın yaparken veya oyun oynarken istismara veya tacize uğradığını bildirdi. Ne yazık ki bu oran, 18-24 yaş arası kadınlarda yüzde 75\'e yükseliyor.  Çevrimiçi tacizden etkilenen kadınların yüzde 80\'i gelen mesaj ve yorumların cinsel içerikli olduğunu, yüzde 35\'i ise mesajların şiddet içerdiğini ifade etti.  Öte yandan araştırma sonucunda her dört kadın oyuncudan birinin “kendini depresyonda hissettiği” ve yüzde 27 gibi bir oranın da tehditlerin gerçek hayatta saldırılara dönüşebileceğinden endişe ettiği ortaya çıktı.   Katılımcıların yüzde 25\'i istismarı bildirmeyeceklerini söylerken, kadın oyuncuların yüzde 31\'i dikkat çekmemek için çevrimiçi oyunlarda cinsiyetleri hakkında yalan söylediklerini belirtiyor.  Bu anketi erkek oyuncular da doğruladı. Erkeklerin yüzde 51’i kadınların oyun içerisinde tacize ve istismara uğradıklarına birebir tanık olduklarını ifade etti. Bunun yanında her iki cinsiyetten yüzde 66’lık bir kesim, kadınların erkeklerden daha fazla tacize uğrama olasılığının yüksek söylüyor. ', 0x2e2e2f75706c6f6164732f6f79756e342e6a706567, 'OYUN'),
(66, 'Samsung Galaxy S23\'e Özel\" Olarak Tanıtılan Snapdragon İşlemcisi', 'Akıllı telefon dünyasının önemli sızıntı kaynakları arasında yer alan Digital Chat Station, yüksek çalışma hızına sahip Snapdragon 8 Gen 2 işlemcilerin Samsung tekelinden çıktığını belirtti. Weibo\'daki paylaşımında detay vermekten kaçınan Digital Chat Station, artık diğer markaların da yüksek çalışma hızındaki Snapdragon 8 Gen 2\'yi kullanabileceklerini ileri sürdü.Akıllı telefon dünyasının önemli sızıntı kaynakları arasında yer alan Digital Chat Station, yüksek çalışma hızına sahip Snapdragon 8 Gen 2 işlemcilerin Samsung tekelinden çıktığını belirtti. Weibo\'daki paylaşımında detay vermekten kaçınan Digital Chat Station, artık diğer markaların da yüksek çalışma hızındaki Snapdragon 8 Gen 2\'yi kullanabileceklerini ileri sürdü.Akıllı telefon dünyasının önemli sızıntı kaynakları arasında yer alan Digital Chat Station, yüksek çalışma hızına sahip Snapdragon 8 Gen 2 işlemcilerin Samsung tekelinden çıktığını belirtti. Weibo\'daki paylaşımında detay vermekten kaçınan Digital Chat Station, artık diğer markaların da yüksek çalışma hızındaki Snapdragon 8 Gen 2\'yi kullanabileceklerini ileri sürdü.', 0x2e2e2f75706c6f6164732f6d6f62696c342e6a706567, 'MOBİL'),
(67, 'İlk Kez Bir Elektrikli Otomobil, Dünyanın En Çok Satılan Otomobili Oldu', 'Yukarıdaki tabloda da görebileceğiniz üzere Tesla Model Y, en yakın rakibi olan Toyota Corolla\'ya ufak bir fark atarak, 2023\'te dünyanın en çok satılan arabası oldu. Ancak Toyota\'nın başarısını görmezden gelmek, Japon markaya haksızlık olur. Listenin ilk 5 sırasında yer alan araçların dört tanesi Toyota. Yukarıdaki tabloda da görebileceğiniz üzere Tesla Model Y, en yakın rakibi olan Toyota Corolla\'ya ufak bir fark atarak, 2023\'te dünyanın en çok satılan arabası oldu. Ancak Toyota\'nın başarısını görmezden gelmek, Japon markaya haksızlık olur. Listenin ilk 5 sırasında yer alan araçların dört tanesi Toyota. ', 0x2e2e2f75706c6f6164732f6f746f6d6f62696c342e6a706567, 'OTOMOBİL'),
(68, 'Acer, Canavar Gibi Özelliklerle Donatılan Predator Triton 16 Tanıttı', 'Tayvanlı teknoloji devi Acer, düzenlediği bir etkinlikte iki yeni dizüstü bilgisayar duyurdu. \"Swift Edge 16\" ve \"Predator Triton 16\" olarak isimlendirilen bu dizüstü bilgisayarlar, ultra yüksek performansları ile tüketicileri mest etmeyi başaracak gibi görünüyorlar.  Peki Acer\'ın yeni dizüstü bilgisayarları tüketicilere neler vadediyorlar? Gelin her iki modele de tüm detaylarıyla bakalım.Tayvanlı teknoloji devi Acer, düzenlediği bir etkinlikte iki yeni dizüstü bilgisayar duyurdu. \"Swift Edge 16\" ve \"Predator Triton 16\" olarak isimlendirilen bu dizüstü bilgisayarlar, ultra yüksek performansları ile tüketicileri mest etmeyi başaracak gibi görünüyorlar.  Peki Acer\'ın yeni dizüstü bilgisayarları tüketicilere neler vadediyorlar? Gelin her iki modele de tüm detaylarıyla bakalım.Tayvanlı teknoloji devi Acer, düzenlediği bir etkinlikte iki yeni dizüstü bilgisayar duyurdu. \"Swift Edge 16\" ve \"Predator Triton 16\" olarak isimlendirilen bu dizüstü bilgisayarlar, ultra yüksek performansları ile tüketicileri mest etmeyi başaracak gibi görünüyorlar.  Peki Acer\'ın yeni dizüstü bilgisayarları tüketicilere neler vadediyorlar? Gelin her iki modele de tüm detaylarıyla bakalım.', 0x2e2e2f75706c6f6164732f74656b6e6f6c6f6a69342e6a706567, 'TEKNOLOJİ'),
(69, 'Yeni Call of Duty Oyununun Modern Warfare 3 Olabileceği İddia Edildi', 'Video oyun dünyasının önemli isimlerinden Activision, 2019 yılında bir açıklama yapmış ve her yıl yeni bir Call of Duty oyununun piyasaya sürüleceğini duyurmuştu. Sözünde duran şirket, geçtiğimiz yıllarda bu seri için birer oyun yayınladı. Hal böyle olunca oyuncular, 2023 yılında piyasaya sürülecek yeni Call of Duty oyununu merak etmeye başladılar.  Son günlerde ise konuyla ilgili yeni gelişmeler yaşandı. Birkaç gün önce Insider Gaming\'de yer alan bir habere göre Activision, yeni oyun için çalışmaları genel olarak tamamladı. Kaynaklar, oyunun çıkış tarihinin de belli olduğunu ileri sürmüştü. Öte yandan bugün ise oyunun ismi ve konusuyla ilgili iddialar ortaya atıldı.Video oyun dünyasının önemli isimlerinden Activision, 2019 yılında bir açıklama yapmış ve her yıl yeni bir Call of Duty oyununun piyasaya sürüleceğini duyurmuştu. Sözünde duran şirket, geçtiğimiz yıllarda bu seri için birer oyun yayınladı. Hal böyle olunca oyuncular, 2023 yılında piyasaya sürülecek yeni Call of Duty oyununu merak etmeye başladılar.  Son günlerde ise konuyla ilgili yeni gelişmeler yaşandı. Birkaç gün önce Insider Gaming\'de yer alan bir habere göre Activision, yeni oyun için çalışmaları genel olarak tamamladı. Kaynaklar, oyunun çıkış tarihinin de belli olduğunu ileri sürmüştü. Öte yandan bugün ise oyunun ismi ve konusuyla ilgili iddialar ortaya atıldı.', 0x2e2e2f75706c6f6164732f6f79756e352e6a706567, 'OYUN'),
(70, 'ChatGPT Artık Tüm Telefonların Ana Ekranlarına Eklenebiliyor', 'Microsoft’un “ağ için yapay zekâ destekli kopilot” olarak tanımladığı Bing, artık Widget olarak ana ekrana eklenebilir oldu. Bing’in son sürümüyle artık tek tuşla sohbet botuna, arama motoruna ve kamera ile arama özelliklerine ulaşılabilecek. Ancak bu özellik ne yazık ki şu an için ülkemizde kullanılmıyor.Microsoft’un “ağ için yapay zekâ destekli kopilot” olarak tanımladığı Bing, artık Widget olarak ana ekrana eklenebilir oldu. Bing’in son sürümüyle artık tek tuşla sohbet botuna, arama motoruna ve kamera ile arama özelliklerine ulaşılabilecek. Ancak bu özellik ne yazık ki şu an için ülkemizde kullanılmıyor.Microsoft’un “ağ için yapay zekâ destekli kopilot” olarak tanımladığı Bing, artık Widget olarak ana ekrana eklenebilir oldu. Bing’in son sürümüyle artık tek tuşla sohbet botuna, arama motoruna ve kamera ile arama özelliklerine ulaşılabilecek. Ancak bu özellik ne yazık ki şu an için ülkemizde kullanılmıyor.Microsoft’un “ağ için yapay zekâ destekli kopilot” olarak tanımladığı Bing, artık Widget olarak ana ekrana eklenebilir oldu. Bing’in son sürümüyle artık tek tuşla sohbet botuna, arama motoruna ve kamera ile arama özelliklerine ulaşılabilecek. Ancak bu özellik ne yazık ki şu an için ülkemizde kullanılmıyor.', 0x2e2e2f75706c6f6164732f6d6f62696c34352e6a706567, 'MOBİL'),
(71, 'BMW Güncel Fiyat Listesi: En Ucuz SUV 2 Milyona Dayandı!', 'Her otomobil tutkununun hayalini süsleyen Alman otomobil devi BMW\'nin güncel fiyat listesi belli oldu. Size tavsiyemiz, bu marka artık rüyalarınıza bile girmesin...  Peki BMW sıfır araba fiyatları nasıl değişti? Bu haberimizde, BMW Mayıs 2023 fiyat listesine bakacağız. Listenin BMW\'den alındığını, aylık olarak güncelleneceğini belirtelim Her otomobil tutkununun hayalini süsleyen Alman otomobil devi BMW\'nin güncel fiyat listesi belli oldu. Size tavsiyemiz, bu marka artık rüyalarınıza bile girmesin...  Peki BMW sıfır araba fiyatları nasıl değişti? Bu haberimizde, BMW Mayıs 2023 fiyat listesine bakacağız. Listenin BMW\'den alındığını, aylık olarak güncelleneceğini belirtelim', 0x2e2e2f75706c6f6164732f6f746f6d6f62696c352e6a706567, 'OTOMOBİL'),
(72, 'Yapay Zekanın “Yalancı” Olarak Eğitilebileceğini Gösteren Olay', 'Geçtiğimiz hafta GPT tabanlı yapay zekâ sohbet botunu tüm kullanıcılarına açan Snapchat, şimdiden bazı firelere ev sahipliği yapmaya başladı. Snapchat’in My AI yapay zekâsı, konumunu bilip bilmediği sorusuna tüm kullanıcılara yalan söyleyerek cevap verdi.  Twitter’da “@rewolfe28” tarafından paylaşılan ilk görselde kullanıcı, yapay zekâya ardı ardına “Konumumu biliyor musun?” ve “Ben neredeyim?” sorularını sordu. Yapay zekâ her iki soruya da “Konumunuza erişimim yok.” cevabını verdi. Fakat gerçek, soruyu dolaylı yoldan sorunca ortaya çıktı.Geçtiğimiz hafta GPT tabanlı yapay zekâ sohbet botunu tüm kullanıcılarına açan Snapchat, şimdiden bazı firelere ev sahipliği yapmaya başladı. Snapchat’in My AI yapay zekâsı, konumunu bilip bilmediği sorusuna tüm kullanıcılara yalan söyleyerek cevap verdi.  Twitter’da “@rewolfe28” tarafından paylaşılan ilk görselde kullanıcı, yapay zekâya ardı ardına “Konumumu biliyor musun?” ve “Ben neredeyim?” sorularını sordu. Yapay zekâ her iki soruya da “Konumunuza erişimim yok.” cevabını verdi. Fakat gerçek, soruyu dolaylı yoldan sorunca ortaya çıktı.', 0x2e2e2f75706c6f6164732f74656b6e6f6c6f6a69352e6a706567, 'TEKNOLOJİ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `ID` int(11) NOT NULL,
  `KATEGORIADI` text NOT NULL,
  `SAYFASEC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`ID`, `KATEGORIADI`, `SAYFASEC`) VALUES
(11, 'OYUN', 'OYUN'),
(12, 'MOBİL', 'MOBİL'),
(13, 'OTOMOBİL', 'OTOMOBİL'),
(14, 'TEKNOLOJİ', 'TEKNOLOJİ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `ID` int(11) NOT NULL,
  `ADSOYAD` text NOT NULL,
  `EPOSTA` text NOT NULL,
  `HAKKINDA` text NOT NULL,
  `KADI` text NOT NULL,
  `SIFRE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`ID`, `ADSOYAD`, `EPOSTA`, `HAKKINDA`, `KADI`, `SIFRE`) VALUES
(9, 'Murat Şimşek', 'murat_smsk.52@gmail.com', 'asdasd', 'admin', '123'),
(10, 'Varol Güven', 'varolguven@gmail.com', 'web Proje Yönetim', 'varol', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menular`
--

CREATE TABLE `menular` (
  `ID` int(11) NOT NULL,
  `MENUADI` text NOT NULL,
  `MENUSEC` text NOT NULL,
  `SAYFASEC` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `menular`
--

INSERT INTO `menular` (`ID`, `MENUADI`, `MENUSEC`, `SAYFASEC`) VALUES
(8, 'ANASAYFA', 'Üst Menü', 'index'),
(11, 'KATEGORİLER', 'Üst Menü', 'index'),
(12, 'HAKKINDA', 'Üst Menü', 'index'),
(13, 'İLETİŞİM', 'Üst Menü', 'index');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `ID` int(11) NOT NULL,
  `SAYFAADI` text NOT NULL,
  `URL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`ID`, `SAYFAADI`, `URL`) VALUES
(46, 'index', 'index'),
(47, 'OYUN', 'OYUN'),
(48, 'MOBİL', 'MOBİL'),
(49, 'OTOMOBİL', 'OTOMOBİL'),
(50, 'TEKNOLOJİ', 'TEKNOLOJİ');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `menular`
--
ALTER TABLE `menular`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `menular`
--
ALTER TABLE `menular`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
