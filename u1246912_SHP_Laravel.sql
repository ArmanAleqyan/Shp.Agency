-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 14 2022 г., 14:46
-- Версия сервера: 5.7.27-30
-- Версия PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u1246912_SHP_Laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contentheaders`
--

CREATE TABLE `contentheaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canvasphoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buttontext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generaltitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contentheaders`
--

INSERT INTO `contentheaders` (`id`, `logo`, `canvasphoto`, `buttontext`, `generaltitle`, `created_at`, `updated_at`) VALUES
(1, '1649169544logo.svg', '1649772483photo_2022-04-12_17-07-26.jpg', 'Get a quote', 'EXPERIENTIAL EVENT PRODUCTION AGENCY', NULL, '2022-04-12 11:08:03');

-- --------------------------------------------------------

--
-- Структура таблицы `contenttwos`
--

CREATE TABLE `contenttwos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `abouttextone` longtext COLLATE utf8mb4_unicode_ci,
  `abouttextwo` longtext COLLATE utf8mb4_unicode_ci,
  `buttoncontact` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contenttwos`
--

INSERT INTO `contenttwos` (`id`, `abouttextone`, `abouttextwo`, `buttoncontact`, `created_at`, `updated_at`) VALUES
(1, 'We create unforgettable experiences that connect brands with people in the most exciting, enjoyable way possible.', 'From corporate events to launching new products, we\'ll work with you to create an experience that\'s uniquely tailored to your needs and vision.', 'Contact us', '2022-03-28 09:41:22', '2022-04-06 10:21:00');

-- --------------------------------------------------------

--
-- Структура таблицы `content_eights`
--

CREATE TABLE `content_eights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `content_footers`
--

CREATE TABLE `content_footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `WhatsApp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `line7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacytext` longtext COLLATE utf8mb4_unicode_ci,
  `cookie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cookietext` longtext COLLATE utf8mb4_unicode_ci,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `linkdine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_footers`
--

INSERT INTO `content_footers` (`id`, `line1`, `line2`, `line3`, `phone`, `telegram`, `WhatsApp`, `line7`, `email`, `address`, `privacy`, `privacytext`, `cookie`, `cookietext`, `instagram`, `facebook`, `linkdine`, `created_at`, `updated_at`) VALUES
(1, 'Star Hills Production', '2022', 'Let\'s talk!', '+357 940 586 55', 'shp_agency', 'message/ZUD46ZTBJT2DL1?autoload=1&app_absent=0', 'Write us', 'team@shp.agency', '20 Louki Akrita 3030 Limassol, Cyprus', 'Privacy policy', '\"<h1><big>PRIVACY POLICY<\\/big><\\/h1>\\r\\n\\r\\n<p><strong>Last Updated: 01\\/02\\/2022.<\\/strong><\\/p>\\r\\n\\r\\n<p>This Privacy Policy describes how STAR HILLS PRODUCTION LTD, a limited liability company duly incorporated in the Republic of Cyprus under the Companies Law Cap. 113, with company registration number HE 377100 and registered office address at Spyrou Kyprianou, 9, Neda Center, Floor 1, Flat\\/Office 1B, 3070, Limassol, Cyprus (hereinafter referred to as the &quot;<strong>Company<\\/strong>&quot;, &quot;<strong>Us<\\/strong>&quot;, &quot;<strong>Our<\\/strong>&quot; or &quot;<strong>We<\\/strong>&quot;) collects, stores, uses, discloses or otherwise processes the personal data of end users of the Company&rsquo;s services (hereinafter referred to as &quot;<strong>You<\\/strong>&quot;), and what rights You have if We are processing Your personal data.<\\/p>\\r\\n\\r\\n<p>This Privacy Policy does not address data collection through other sources. The expression &quot;Your Data&quot; is used when referring to personal data that relates to You as an identified or identifiable individual. All personal data gathered by the Company in the course of its business shall be kept and handled in accordance with the General Data Protection Regulation (GDPR), Regulation (EU) 2016\\/679, and the Law providing for the Protection of Natural Persons with regard to the Processing of Personal Data and for the Free Movement of such Data of 2018 (Law 125(I)\\/2018), as amended from time to time, and any other applicable legislation, regulation or directive.<\\/p>\\r\\n\\r\\n<p><strong>1. Data Controller<\\/strong><\\/p>\\r\\n\\r\\n<p>By &quot;<strong>Data Controller<\\/strong>&quot;, We mean an entity that determines how and why personal data is processed. With regard to the activities described in this Privacy Policy, We are the Data Controller.<\\/p>\\r\\n\\r\\n<p><strong>2. Contact Information<\\/strong><\\/p>\\r\\n\\r\\n<p>For matters related to this Privacy Policy, You may reach Us by email at&nbsp;team@shp.agency.<\\/p>\\r\\n\\r\\n<p>In addition, You may contact Our appointed Data Protection Officer (&quot;<strong>DPO<\\/strong>&quot;), who oversees Our data protection related matters. For any questions or concerns about how We use Your Data, You may contact Our DPO by email directly at&nbsp;team@shp.agency.&nbsp;<\\/p>\\r\\n\\r\\n<p><strong>3. Why Do We Collect And Process Personal Data And What Is Our Legal Basis&nbsp;<\\/strong><\\/p>\\r\\n\\r\\n<p>We collect and process Your personal data to enable Us to perform Our contractual obligations with You, in order to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>create, maintain and allow the use of an account for You,&nbsp;<\\/li>\\r\\n\\t<li>enable You to use Our services,<\\/li>\\r\\n\\t<li>notify You of new products or promotional offers, or<\\/li>\\r\\n\\t<li>verify Your purchases or other transactions.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Pertaining to Our legitimate interest to make Our services the best they can be, We process Your Data to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>operate and maintain Our services (for example, by making sure Our services are secure and function as intended),<\\/li>\\r\\n\\t<li>troubleshoot or debug any bugs, errors, or other issues in Our services,<\\/li>\\r\\n\\t<li>measure and analyse the use of Our services or data We collect through Our services (for example, to discover trends or other insights or to inform Our operations),<\\/li>\\r\\n\\t<li>create data that is not identifiable to You (for instance, aggregate data), which We then use and share freely,<\\/li>\\r\\n\\t<li>store information so that You will not have to re-enter it during Your future use of our services,<\\/li>\\r\\n\\t<li>conduct surveys or other research to learn more about Our users,<\\/li>\\r\\n\\t<li>solicit feedback from You about how We can improve our services,<\\/li>\\r\\n\\t<li>monitor the effectiveness of Our services,<\\/li>\\r\\n\\t<li>customize and personalize the user experience, or<\\/li>\\r\\n\\t<li>improve Our current services or develop new services.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Pertaining to Our legitimate interest to make sure You have the best possible user experience, We will process Your Data to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>provide You with offers and rewards,<\\/li>\\r\\n\\t<li>handle Your support requests or otherwise manage Our relationship with You, or<\\/li>\\r\\n\\t<li>send You service-related communications (for instance, technical notices, security alerts, or administrative messages).<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Pertaining to Our legitimate interest in making sure that Our services are a fair and safe environment for all users, We will process Your Data to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>moderate and monitor the use of Our services (including any messages sent through the services), either automatically or manually, or<\\/li>\\r\\n\\t<li>ensure that&nbsp;terms of use are followed.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Pertaining to Our legitimate interest to promote Our services and to make sure We reach Our targeted prospective audiences, We will process Your Data to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>measure, analyse, enhance and improve Our advertising effectiveness (including Our advertising outside of Our services),<\\/li>\\r\\n\\t<li>communicate with You and to forward offers, rewards, event announcements, or other news related to Our services or for other operations,<\\/li>\\r\\n\\t<li>provide instructions to Our advertising affiliates to show or not show Our ads to You based on Your activity (by controlling the number of times Our ads are displayed), or<\\/li>\\r\\n\\t<li>instruct Our advertising affiliates to advertise Our services to audiences with similar interests to Yours.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Pertaining to Our legitimate interest for the provision of related ads in Our Website (the &ldquo;<strong>Website<\\/strong>&rdquo;), We will process Your Data to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>display ads in Our Website, either from Us or Our advertising affiliates,<\\/li>\\r\\n\\t<li>monitor Your activity in Our Website in order to learn about Your interests and enhance the provision of advertising, or<\\/li>\\r\\n\\t<li>customise the ads You receive in Our Website and allow Our advertising affiliates to personalize the ads content You see, to make them more relevant to You.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Pertaining to Our legitimate interest to safeguard Our operations, We will process Your Data to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>detect, prevent, or investigate fraud or fraudulent activity or otherwise not authorised behaviour,<\\/li>\\r\\n\\t<li>conduct audit checks to Our operations or processes (for instance, to verify that they operate as intended and according to regulatory or contractual conditions), or<\\/li>\\r\\n\\t<li>define, defend and exercise Our legal rights to the extent allowed by the relevant laws and regulations.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>By providing Your consent, We will process Your Data:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>to forward You with newsletters or other similar communications in the case You have subscribed to them through a subscription form Our Website, or<\\/li>\\r\\n\\t<li>for other purposes explained to You at the time Your consent will be requested (for example, using Your GPS location to provide location-based experiences).<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Finally, We will process Your Data where necessary to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>conform with legal obligations that apply to Us (including accounting and tax requirements and requirements to provide information to competent authorities upon request), or<\\/li>\\r\\n\\t<li>protect Your interests or the interests of others.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Furthermore, We will process Your Data for additional purposes which are compatible with any of the purposes listed above.<\\/p>\\r\\n\\r\\n<p>We do not use Your Data to make automated decisions which significantly affect You. By an &quot;automated decision&quot;, We mean a decision made by an information system without any human intervention.<\\/p>\\r\\n\\r\\n<p><strong>4. When does the Company Gather Your Personal Data<\\/strong><\\/p>\\r\\n\\r\\n<p>The Company primarily gathers your personal data in the case of any contractual relations. You may be asked to provide your personal data upon usage of any Websites of the Company. The data is gathered discretely and only the Company has access to it during this stage. By engaging in contractual relations with the Company, You give your express consent to the Company to gather and process your personal data. You are fully responsible for the accuracy of the data provided to the Company. By engaging in contractual relations with the Company, You agree that the Company may collect, store, disclose and transfer Your personal data internationally (including disclosure to any related legal entities of the Company or to its subcontractors) , including sensitive personal data, relating to You and\\/or Your employees for various purposes including (i) processing, reviewing and administering Your registration\\/purchase form to seminars\\/conferences\\/events, (ii) maintaining the administrative or client relationship management systems of the Company, (iii) quality and risk management reviews, (iv) statistical reviews, (v) providing You with information about the Company and of seminars\\/conferences\\/events offers and\\/or organized, (vi) meeting the requirements of applicable laws and regulations. When You provide personal data to us about Your employees and other individuals, You confirm that you only do so provided that you have the authority to act as their agent and that You have obtained their approval and unequivocal consent from such employees and\\/or other individuals.<\\/p>\\r\\n\\r\\n<p><strong>5. What Data do We Collect<\\/strong><\\/p>\\r\\n\\r\\n<p>We collect the following data in relation to You:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Your name, surname, name of the company You represent, job position, telephone number, email address, or any other contact information if You have provided them to Us when registering an account or subscribing to Our communications,<\\/li>\\r\\n\\t<li>online identifiers for example Your IP address, identifiers We assign to Your account, hardware or operating system identifiers,&nbsp;<\\/li>\\r\\n\\t<li>Your access coarse location such as, country, province, or city, deduced from Your IP address,<\\/li>\\r\\n\\t<li>data relating to Your use of the services,&nbsp;<\\/li>\\r\\n\\t<li>crash logs or other information related to bugs, errors, or other issues in Our Websites,<\\/li>\\r\\n\\t<li>messages or other communications or emails You have forwarded to Our support team,<\\/li>\\r\\n\\t<li>in case You subscribe to Our communications, Your content preferences or other information You may submit to Us when subscribing to Our communications,<\\/li>\\r\\n\\t<li>in case You participate in Our surveys, research or other inquiries, any comments, feedback, responses, or any other information You may provide to Us when doing so such as, information about Your background or experience with Our Games or services,<\\/li>\\r\\n\\t<li>for any additional information You may decide to provide to Us through Our services or otherwise, and<\\/li>\\r\\n\\t<li>following Your permission, any other information described to You when asking for Your consent.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>We do not anticipate or have any intention to collect or otherwise process any special categories of data relating to You. Special categories of data concern data relating Your genetic, biometric, or health information, revealing racial or ethnic origin, sex life information, sexual orientation, political beliefs, religious or philosophical beliefs, trade union membership, or information about Your criminal offences or convictions. Please do not this type of information to Us or use the services for special categories of data, such as mean genetic, biometric or health information, information revealing racial or ethnic origin, sex life or sexual orientation, political opinions, religious or philosophical beliefs or trade union membership, or information about Your criminal offences or convictions. Please do not provide this kind of information to Us or use the services to present such information to others.<\\/p>\\r\\n\\r\\n<p><strong>6. Cookies and Similar Technologies on Our Websites<\\/strong><\\/p>\\r\\n\\r\\n<p>As with most websites today, Our Websites use cookies or similar technologies (for instance, local shared objects or web beacons). &quot;Cookies&quot; or a &quot;cookie&quot; is small piece of data sent from a website which is subsequently stored on Your computer by Your web browser. Cookies may be created by either the website You visit (first-party cookies) or by third parties involved in providing content, functionality, or services such as analytics or advertising for the website You visit (third-party cookies). A Cookie is typically used to identify or &quot;remember&quot; Your device, for instance to enable functionality, to facilitate audience measurement, to improve performance, or to store Your preferences.<\\/p>\\r\\n\\r\\n<p><strong>6.1 How To Manage Cookies<\\/strong><\\/p>\\r\\n\\r\\n<p>Through Your device or browser settings, You may control the use of cookies, for instance by disabling some or all cookies or by configuring Your web browser or device to notify You when cookies are being installed. Though, You should note that by disabling cookies You may affect Your ability to use the services.<\\/p>\\r\\n\\r\\n<p>For more information, please see the Cookies Policy.<\\/p>\\r\\n\\r\\n<p><strong>7. From What Sources Do We Collect Your Personal Data<\\/strong><\\/p>\\r\\n\\r\\n<p>We collect Your personal data from the following sources:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>from information You provide to Us during for instance, Your account registration, Your subscription to Our communications, from survey responses, or by the submission of support enquiries,<\\/li>\\r\\n\\t<li>directly from Your device and\\/or You by automatic means, by the use of Our services or on third-party websites or applications, through cookies or similar technologies or through software development kits (SDKs),<\\/li>\\r\\n\\t<li>following Your consent, from additional sources described to You when asking for Your consent.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>We note that You are not obligated to provide data to Us. However, We may not be able to provide You with the services, or some elements or parts of the services, without the collection and processing of Your personal data. When You make use of Our services, We will collect data relating to You for several or all of the purposes described within this Privacy Policy, depending on the services You decide to use and Your choices when using them. We provide You with a number of options that allow You to limit or control the extent to which Your data is processed. For instance, You may opt to disable certain or all cookies from Your browser settings.<\\/p>\\r\\n\\r\\n<p><strong>8. Usage of Personal Data<\\/strong><\\/p>\\r\\n\\r\\n<p>The usage of gathered personal data includes, but is not limited to systematisation, collection, saving, updating, changing, depersonalisation, blocking and destruction. The Company will not disclose your personal data to any third parties, except in specified cases as per the Company&rsquo;s contractual terms and conditions and as required by law or by public authorities. The Company doesn&rsquo;t store any details of credit\\/debit cards used for payments on our Websites.<\\/p>\\r\\n\\r\\n<p><strong>9. Who do We Share Your data with<\\/strong><\\/p>\\r\\n\\r\\n<p>We choose to share Your data with third parties in order to accomplish the purposes defined within this Privacy Policy. These third parties include:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>affiliate companies or associates of the Company, for instance where they provide their assistance in the development or operation of Our services,<\\/li>\\r\\n\\t<li>individuals or companies outside of the Company that provide services to Us and process data on Our behalf when providing those services, for instance, providers of hosting services, analytics services, services that add functionality to the services, or other services that help Us develop and operate Our services,<\\/li>\\r\\n\\t<li>other affiliates We cooperate with in the course of providing the services, who process Your data independently of Us,<\\/li>\\r\\n\\t<li>potential or actual buyers, including their advisors or agents, in the context of an acquisition, merger, or other corporate restructuring,<\\/li>\\r\\n\\t<li>the competent Courts of law or other governmental authorities, where the disclosure of data is necessary as a matter of applicable law or regulation,<\\/li>\\r\\n\\t<li>any person or entity where We believe disclosure is necessary to exercise, establish or defend Our legal rights or to protect the vital interests of You or others, or<\\/li>\\r\\n\\t<li>with any other individual or entity with Your consent.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p><strong>10. How long do We keep Your data<\\/strong><\\/p>\\r\\n\\r\\n<p>Your data will be kept for so long as it is necessary for achieving the purpose for which it was collected such as to enable Us to provide You with the services, or to comply with legal, reporting, or accounting requirements. We will occasionally review the collected data and delete or de-identify.<\\/p>\\r\\n\\r\\n<p>Following the appropriate retention period, We will either de-identify or delete Your data or, if neither de-identification or deletion is possible, for instance due to data being stored on a backup server, We shall isolate Your data and halt further processing until their de-identification or deletion is made possible. It should be noted that We will continue to make use of data which is not identifiable to You, such as aggregate data.<\\/p>\\r\\n\\r\\n<p><strong>11. How We Keep Your data secure<\\/strong><\\/p>\\r\\n\\r\\n<p>We have employed all appropriate security procedures and measures to provide Your data with a level of security suitable for the level of risk applicable with the processing activities described within this Privacy Policy. These measures are aimed at protecting Your data against unlawful or accidental destruction, loss, alteration, including unauthorised disclosure or access. We employ a varying degree of measures, which typically include encryption in transit, pseudonymization of identifying data where possible, controls for limiting the access to systems or services that contain personal data and maintaining procedures and practises to handle suspected security incidents.<\\/p>\\r\\n\\r\\n<p><strong>12. Your rights<\\/strong><\\/p>\\r\\n\\r\\n<p>In the case that We are processing Your Data, You have the right to:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>access, rectify, or request the erasure of Your personal data,<\\/li>\\r\\n\\t<li>request Us to restrict Our processing of Your personal data,<\\/li>\\r\\n\\t<li>object to Our processing of Your personal data to the extent Our processing is based on Our legitimate interests or the legitimate interests of a third party, or<\\/li>\\r\\n\\t<li>where technically feasible, request a copy of the personal data You have provided to Us in machine-readable format.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Where the processing We conduct on Your Data is done following Your consent, You may withdraw Your consent at any given time. We bring to Your attention that the processing of Your Data will continue regardless of the withdrawal of Your consent, where We have a lawful basis to do so.<\\/p>\\r\\n\\r\\n<p>In order to access Your personal data, or to request its erasure, You may contact Us at team@shp.agency. In the case You wish to exercise any of Your rights, You may contact Us at&nbsp;<a href=\\\"mailto:team@shp.agency\\\">team@shp.agency<\\/a> <a href=\\\"mailto:info@cyprusitforum.comor\\\">or <\\/a>our postal address at 9, Spyrou Kyprianou street, Neda Center, Office 1B, 3070, Limassol, Cyprus. In order to fulfil requests which are submitted by email, We may need to confirm Your identity so as to verify Your right to make the request, which may involve requesting additional information from You. For instance, We may ask You to provide sufficiently detailed information about the individual to which the request relates in order to enable Us to confirm that You are indeed the specified individual or that You are acting on their behalf. While this is not Our usual practise, We reserve the right to charge You an appropriate fee for the exercise of Your rights where permitted by applicable laws and regulations.<\\/p>\\r\\n\\r\\n<p>Lastly, You always have the right to submit a complaint with Your local data protection authority regarding Our processing of Your data. For more information, please contact Your local data protection authority, for instance, the Office of the Commissioner for Data Protection of the Republic of Cyprus.<\\/p>\\r\\n\\r\\n<p><strong>13. Privacy Policy Updates<\\/strong><\\/p>\\r\\n\\r\\n<p>The Company reserves the right to update this Privacy Policy from time to time, for example due to changes in Our operations or the legal obligations that apply to Us. Updates will be made available here. We urge you to review Our Privacy Policy on a frequent basis, and in particular before You submit additional information through Our services.<\\/p>\"', 'Cookie policy', '\"<h1>COOKIE POLICY<\\/h1>\\r\\n\\r\\n<h2>Compliance<\\/h2>\\r\\n\\r\\n<p>All personal data gathered by STAR HILLS PRODUCTION LTD (hereinafter referred to as the &#39;&#39;Company&#39;&#39;) in the course of its business shall be kept and handled in accordance with the Cyprus Processing of Personal Data (Protection of the Individual) Law of 2001, as amended from time to time, on protection of personal data and any other applicable legislation as per the relevant jurisdiction.<\\/p>\\r\\n\\r\\n<h3>Gathering of Personal Data<\\/h3>\\r\\n\\r\\n<p>The Company primarily gathers your personal data in the case of any contractual relations. You may be asked to provide your personal data upon usage of any websites of the Company. The data is gathered discretely and only the Company has access to it during this stage. By engaging in contractual relations with the Company, you give your express consent to the Company to gather and process your personal data. You are fully responsible for the accuracy of the data provided to the Company. By engaging in contractual relations with the Company, you agree that the Company may collect, store, disclose and transfer internationally (including disclosure to any related legal entities of the Company or to its subcontractors) personal data, including sensitive personal data, relating to you and\\/or your employees for various purposes including (i) processing, reviewing and administering your registration\\/purchase form to seminars\\/conferences\\/events, (ii) maintaining the administrative or client relationship management systems of the Company, (iii) quality and risk management reviews, (iv) statistical reviews, (v) providing you with information about the Company and of seminars\\/conferences\\/events offers and\\/or organized, (vi) meeting the requirements of applicable laws and regulations. When you provide personal data to us about your employees and other individuals, you confirm that you only do so provided that you have the authority to act as their agent and that you have obtained any required approval and\\/or consent from such employees and\\/or other individuals.<\\/p>\\r\\n\\r\\n<p>To make STAR HILLS PRODUCTION LTD (the &ldquo;<strong>Star Hills<\\/strong>&rdquo;, &ldquo;<strong>Us<\\/strong>&rdquo;) website work properly, we sometimes place small data files called cookies on your device. Star Hills respects the confidentiality of&nbsp;your data and strives to ensure the highest level of&nbsp;protection. Despite the measures we&nbsp;are taking to&nbsp;protect your information, any measures that we&nbsp;apply will not have any effect if&nbsp;you neglect the data security.&nbsp;<\\/p>\\r\\n\\r\\n<p>This Cookie Policy applies to the website of Star Hills https:\\/\\/shp.agency&nbsp; (&ldquo;<strong>Star Hills<\\/strong> <strong>Website<\\/strong>&rdquo;). It supplements our Privacy Policy, which may be accessed here: <a href=\\\"https:\\/\\/cyprusitforum.com\\/en\\\">_________<\\/a>.<\\/p>\\r\\n\\r\\n<p>You do not have to accept all of the cookies used by Star Hills&rsquo; Website. If you reject certain cookies, however, you may not be able to use some of the features of Star Hills&rsquo; website. Please note that by deleting or blocking cookies that are strictly necessary for the performance of the website, it may not function correctly, and you may not be able to access certain areas of the Star Hills Website.<\\/p>\\r\\n\\r\\n<p>We obtain certain information by automated means, such as cookies, web server logs, web beacons, and other technologies (collectively the &ldquo;<strong>Cookies<\\/strong>&rdquo;) when you visit, access, or use our websites. This Cookie section explains how we use Cookies, their purposes, and how you can control them.<\\/p>\\r\\n\\r\\n<p><strong>What are Cookies<\\/strong><\\/p>\\r\\n\\r\\n<p>A cookie is a small text file that a website stores on your computer or mobile device when you visit the site.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>First party Cookies are Cookies set by the website you&rsquo;re visiting. Only that website can read them. In addition, a website might potentially use external services, which also set their own Cookies, known as third-party Cookies.<\\/li>\\r\\n\\t<li>Persistent Cookies are Cookies saved on your computer that are not deleted automatically when you quit your browser, unlike a session cookie, which is deleted when you quit your browser.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>Every time you visit the Star Hills Website, you will be prompted to accept or refuse Cookies. The purpose is to enable the site to remember your preferences (such as user name, language, etc.) for a certain period of time. That way, you don&rsquo;t have to re-enter them when browsing around the site during the same visit. Cookies can also be used to establish anonymised statistics about the browsing experience on our sites.<\\/p>\\r\\n\\r\\n<p><strong>How do we use Cookies<\\/strong><\\/p>\\r\\n\\r\\n<p>Star Hills uses Cookies and similar technologies to collect information about the use of our website in order to function effectively and also to improve our website visitors&rsquo; experience when they browse our website.&nbsp;<\\/p>\\r\\n\\r\\n<p>We use session Cookies to make it easier for you to navigate our site. A session cookie expires when you close your browser on your device. A persistent cookie remains on your hard drive for an extended period of time and can be used when you return to our site to help identify you or allow you to log in, or on other third-party sites to communicate to you via online-marketing channels. If you reject Cookies, you may still use our site, but your ability to use some areas of the site will be limited and you may need to re-enter your personal data when you register.<\\/p>\\r\\n\\r\\n<p>We use a third-party tracking service that uses Cookies and similar technology to track non-personal or private information on users and mobile application taken together (where applicable).<\\/p>\\r\\n\\r\\n<p>We use both session and persistent Cookies for the purposes set out below:<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><strong>Necessary\\/Essential Cookies<\\/strong><br \\/>\\r\\n\\tType: Session Cookies<br \\/>\\r\\n\\tAdministered by: Us<br \\/>\\r\\n\\tPurpose: These Cookies are essential to provide You with services available through the Star Hills Website and to enable you to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that you have asked for cannot be provided, and We only use these Cookies to provide You with those services.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<ul>\\r\\n\\t<li><strong>Cookies Policy \\/ Notice Acceptance Cookies<\\/strong><br \\/>\\r\\n\\tType: Persistent Cookies<br \\/>\\r\\n\\tAdministered by: Us<br \\/>\\r\\n\\tPurpose: These Cookies identify if users have accepted the use of Cookies on the Star Hills Website.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<ul>\\r\\n\\t<li><strong>Functionality Cookies<\\/strong><br \\/>\\r\\n\\tType: Persistent Cookies<br \\/>\\r\\n\\tAdministered by: Us<br \\/>\\r\\n\\tPurpose: These Cookies allow us to remember choices you make when you use the Star Hills Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide you with a more personal experience and to avoid you having to re-enter your preferences every time you use the Star Hills Website.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<ul>\\r\\n\\t<li><strong>Tracking and Performance Cookies<\\/strong><br \\/>\\r\\n\\tType: Persistent Cookies<br \\/>\\r\\n\\tAdministered by: Third-Parties<br \\/>\\r\\n\\tPurpose: These Cookies are used to track information about traffic to the Star Hills Website and how users use the Star Hills Website. The information gathered via these Cookies may directly or indirectly identify you as an individual visitor. This is because the information collected is typically linked to a pseudonymous identifier associated with the device you use to access the Website. We may also use these Cookies to test new advertisements, pages, features or new functionality of the Website to see how our users react to them.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p><strong>Your Choices Regarding Cookies<\\/strong><\\/p>\\r\\n\\r\\n<p>You can stop Cookies from being downloaded on your computer by selecting the appropriate settings on your web browser. Most web browsers will tell you how to stop accepting new Cookies, how to be notified when you receive a new Cookie and how to disable existing Cookies. On Microsoft Internet Explorer, this can be done by selecting &ldquo;Tools\\/Internet Options&rdquo; and reviewing your privacy settings or selecting &ldquo;delete Cookies.&rdquo; You can find out how to do this for your particular browser by clicking &ldquo;help&rdquo; on your browser&rsquo;s menu or by visiting&nbsp;<a href=\\\"http:\\/\\/www.allaboutcookies.org\\/manage-cookies\\/index.html\\\">www.allaboutcookies.org<\\/a>. For mobile devices, you can manage how your device and browser share certain device data by adjusting the privacy and security settings on your mobile device. Please note, however, that without Cookies, you may not be able to take full advantage of the Sites or our products or services.<\\/p>\\r\\n\\r\\n<p>If you have any questions about this Cookies Policy, you can contact us at <a href=\\\"mailto:team@cyprusitforum.com\\\">team@cyprusitforum.com<\\/a>.&nbsp;<\\/p>\\r\\n\\r\\n<p><strong>How to manage cookies<\\/strong><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><strong>Removing cookies from your device<\\/strong><\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>You can delete all cookies that are already on your device by clearing the browsing history of your browser. This will remove all cookies from all websites you have visited.<\\/p>\\r\\n\\r\\n<p>Be aware though that you may also lose some saved information (e.g. saved login details, site preferences).<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><strong>Managing site-specific cookies<\\/strong><\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>For more detailed control over site-specific cookies, check the privacy and cookie settings in your preferred browser.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><strong>Blocking cookies<\\/strong><\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>You can set most modern browsers to prevent any cookies being placed on your device, but you may then have to manually adjust some preferences every time you visit a site\\/page. And some services and functionalities may not work properly at all (e.g. profile logging-in).<\\/p>\\r\\n\\r\\n<p>All major browsers offer advises and guidance for managing cookies to&nbsp;be&nbsp;available in&nbsp;your browser. To&nbsp;simplify the configuration of&nbsp;cookies please find links to&nbsp;cookies instructions in&nbsp;some browsers and third-party providers on Puzzle Point&rsquo;s websites and Apps:&nbsp;<\\/p>\\r\\n\\r\\n<p>Internet Explorer<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/support.microsoft.com\\/en-us\\/help\\/17442\\/windows-internet-explorer-delete-manage-cookies\\\">https:\\/\\/support.microsoft.com\\/en-us\\/help\\/17442\\/windows-internet-explorer-delete-manage-cookies<\\/a><\\/p>\\r\\n\\r\\n<p>Google Chrome<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/policies.google.com\\/technologies\\/cookies?hl=en\\\">https:\\/\\/policies.google.com\\/technologies\\/cookies?hl=en<\\/a><\\/p>\\r\\n\\r\\n<p>Google<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/policies.google.com\\/terms?hl=en&amp;gl=be\\\">https:\\/\\/policies.google.com\\/terms?hl=en&amp;gl=be<\\/a>&nbsp;<\\/p>\\r\\n\\r\\n<p>Safari<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/www.apple.com\\/legal\\/privacy\\/en-ww\\/cookies\\/\\\">https:\\/\\/www.apple.com\\/legal\\/privacy\\/en-ww\\/cookies\\/<\\/a><\\/p>\\r\\n\\r\\n<p>Yandex<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/yandex.com\\/support\\/metrica\\/general\\/opt-out.html\\\">https:\\/\\/yandex.com\\/support\\/metrica\\/general\\/opt-out.html<\\/a><\\/p>\\r\\n\\r\\n<p>YouTube&nbsp;<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/www.youtube.com\\/t\\/terms\\\">https:\\/\\/www.youtube.com\\/t\\/terms<\\/a>&nbsp;<\\/p>\\r\\n\\r\\n<p>Internet<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/archive.org\\/about\\/terms.php\\\">https:\\/\\/archive.org\\/about\\/terms.php<\\/a>&nbsp;<\\/p>\\r\\n\\r\\n<p>Facebook<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/www.facebook.com\\/legal\\/terms\\\">https:\\/\\/www.facebook.com\\/legal\\/terms<\\/a>&nbsp;<\\/p>\\r\\n\\r\\n<p>To&nbsp;learn more about cookies, including which ones are on&nbsp;your computer, and how to&nbsp;manage or delete them, we&nbsp;can recommend you to&nbsp;visit: <a href=\\\"https:\\/\\/www.allaboutcookies.org\\\">https:\\/\\/www.allaboutcookies.org<\\/a>.&nbsp;<\\/p>\\r\\n\\r\\n<p>Some functionality cookies can use the Google Analytics service to track your activity. If you want to stop tracking by Google Analytics across all websites, please visit <a href=\\\"https:\\/\\/tools.google.com\\/dlpage\\/gaoptout\\\">https:\\/\\/tools.google.com\\/dlpage\\/gaoptout<\\/a>.<\\/p>\\r\\n\\r\\n<p>The Star Hills Website may contain links to other websites that are not owned or controlled by Star Hills. Please be aware that Star Hills is not responsible for the privacy or security practices of such other sites. We encourage you to be aware when you leave our site and to read the privacy statements of each and every web site or app that collects personally identifiable information.&nbsp;<\\/p>\\r\\n\\r\\n<p>YOURS FAITHFULLY,<\\/p>\\r\\n\\r\\n<p><strong>STAR HILLS PRODUCTION LTD<\\/strong><\\/p>\\r\\n\\r\\n<p>Spyrou Kyprianou, 9, Neda Center, Floor 1,&nbsp;<\\/p>\\r\\n\\r\\n<p>Flat\\/Office 1B, 3070, Limassol, Cyprus.&nbsp;<\\/p>\\r\\n\\r\\n<p>By email: <a href=\\\"mailto:team@cyprusitforum.com\\\">team@cyprusitforum.com<\\/a><\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\"', 'shp.agency', 'https://www.facebook.com/SHP.agency', 'https://www.linkedin.com/company/shp-agency', NULL, '2022-04-12 10:29:21');

-- --------------------------------------------------------

--
-- Структура таблицы `content_fors`
--

CREATE TABLE `content_fors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_fors`
--

INSERT INTO `content_fors` (`id`, `header`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `photo7`, `photo8`, `photo9`, `photo10`, `photo11`, `photo12`, `photo13`, `photo14`, `photo15`, `photo16`, `photo17`, `photo18`, `created_at`, `updated_at`) VALUES
(1, 'Partners that trust us', '1648567775connect-bg.svg', '1648475082partner-2.png', '1648475088partner-3.png', '1648475105partner-4.png', '1648475113partner-5.png', '1648475125partner-6.png', '1648475132partner-7.png', '1648475141partner-8.png', '1648475148partner-1.png', '1648475157partner-2.png', '1648475168partner-3.png', '1648475179partner-4.png', '1648475188partner-7.png', '1648475197partner-8.png', '1648475206partner-1.png', '1648475246partner-7.png', '1648475272partner-4.png', '1648475214partner-2.png', NULL, '2022-04-01 13:42:36');

-- --------------------------------------------------------

--
-- Структура таблицы `content_for_links`
--

CREATE TABLE `content_for_links` (
  `id` int(11) NOT NULL,
  `link1` varchar(255) NOT NULL DEFAULT '#',
  `link2` varchar(255) NOT NULL DEFAULT '#',
  `link3` varchar(255) NOT NULL DEFAULT '#',
  `link4` varchar(255) NOT NULL,
  `link5` varchar(255) NOT NULL,
  `link6` varchar(255) NOT NULL,
  `link7` varchar(255) NOT NULL DEFAULT '#',
  `link8` varchar(255) NOT NULL DEFAULT '#',
  `link9` varchar(255) NOT NULL DEFAULT '#',
  `link10` varchar(255) NOT NULL DEFAULT '#',
  `link11` varchar(255) NOT NULL DEFAULT '#',
  `link12` varchar(255) NOT NULL DEFAULT '#',
  `link13` varchar(255) NOT NULL DEFAULT '#',
  `link14` varchar(255) NOT NULL DEFAULT '#',
  `link15` varchar(255) NOT NULL DEFAULT '#',
  `link16` varchar(255) NOT NULL DEFAULT '#',
  `link17` varchar(255) NOT NULL DEFAULT '#',
  `link18` varchar(255) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `content_for_links`
--

INSERT INTO `content_for_links` (`id`, `link1`, `link2`, `link3`, `link4`, `link5`, `link6`, `link7`, `link8`, `link9`, `link10`, `link11`, `link12`, `link13`, `link14`, `link15`, `link16`, `link17`, `link18`) VALUES
(1, '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Структура таблицы `content_jobs`
--

CREATE TABLE `content_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backphoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobfunction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_jobs`
--

INSERT INTO `content_jobs` (`id`, `photo`, `backphoto`, `title`, `job`, `jobfunction`, `created_at`, `updated_at`) VALUES
(1, 'career-1.svg', 'career-1-filled.svg', 'Careers', ' ', ' ', NULL, '2022-04-12 04:30:49'),
(2, 'career-2.svg', 'career-2-filled.svg', 'Careers', ' ', ' ', NULL, '2022-04-12 04:30:59'),
(3, 'career-3.svg', 'career-3-filled.svg', 'Careers', ' ', ' ', NULL, '2022-04-12 04:31:15'),
(4, 'career-4.svg', 'career-4-filled.svg', 'Careers', ' ', ' ', NULL, '2022-04-03 11:31:50'),
(5, 'career-5.svg', 'career-5-filled.svg', 'Careers', ' ', ' ', NULL, '2022-04-03 11:31:57'),
(6, 'career-6.svg', 'career-6-filled.svg', 'Careers', ' ', ' ', NULL, '2022-04-06 10:20:32'),
(7, 'career-1.svg', 'career-1-filled.svg', 'Careers', ' ', ' ', NULL, '2022-03-28 09:54:09'),
(8, '', '', 'a', '', '', NULL, NULL),
(9, '', '', 'a', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `content_nines`
--

CREATE TABLE `content_nines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_nines`
--

INSERT INTO `content_nines` (`id`, `header`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `photo7`, `photo8`, `created_at`, `updated_at`) VALUES
(1, 'TEAM', '1649856136Subtract-2.png', '1649856163Group 4100-2.png', '1649856192Polygon 3-2.png', '1649856225Rectangle 281-2.png', '1649856264Union-2.png', '1649856290Rectangle 306.png', ' ', 'a', NULL, '2022-04-13 10:25:14');

-- --------------------------------------------------------

--
-- Структура таблицы `content_nine_team_names`
--

CREATE TABLE `content_nine_team_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_nine_team_names`
--

INSERT INTO `content_nine_team_names` (`id`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `name8`, `created_at`, `updated_at`) VALUES
(1, 'Nikita Daniels', 'Anastasiya Vasilevich', 'Maria Komodromou', 'Elizaveta Gruzdeva', 'Margarita Anokhina', 'Anastasiya Rolovets', ' ', NULL, NULL, '2022-04-13 10:25:14');

-- --------------------------------------------------------

--
-- Структура таблицы `content_nine_texts`
--

CREATE TABLE `content_nine_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_nine_texts`
--

INSERT INTO `content_nine_texts` (`id`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`, `created_at`, `updated_at`) VALUES
(1, 'One-of-a-kind Executive Officer', 'Creative Operations Manager', 'Chief Financial Wizard', 'Amazing Marketing Manager', 'Magical Art and Event Director', 'Social Media Guru', ' ', 'a', NULL, '2022-04-13 10:25:14');

-- --------------------------------------------------------

--
-- Структура таблицы `content_sevens`
--

CREATE TABLE `content_sevens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `generaltitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lefttitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_sevens`
--

INSERT INTO `content_sevens` (`id`, `generaltitle`, `lefttitle`, `photo1`, `photo2`, `photo3`, `photo4`, `created_at`, `updated_at`) VALUES
(1, 'Baker Mackenzie Legal', 'WHAT WE DID\n', 'a', 'aa', 'a', 'a', NULL, '2022-03-28 04:21:29'),
(2, 'WHAT WE DID\n', 'a', 'a', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `content_threes`
--

CREATE TABLE `content_threes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `line1` text COLLATE utf8mb4_unicode_ci,
  `line2` text COLLATE utf8mb4_unicode_ci,
  `line3` text COLLATE utf8mb4_unicode_ci,
  `line4` text COLLATE utf8mb4_unicode_ci,
  `line5` text COLLATE utf8mb4_unicode_ci,
  `line6` text COLLATE utf8mb4_unicode_ci,
  `line7` text COLLATE utf8mb4_unicode_ci,
  `line8` text COLLATE utf8mb4_unicode_ci,
  `line9` text COLLATE utf8mb4_unicode_ci,
  `line10` text COLLATE utf8mb4_unicode_ci,
  `line11` text COLLATE utf8mb4_unicode_ci,
  `line12` text COLLATE utf8mb4_unicode_ci,
  `line13` text COLLATE utf8mb4_unicode_ci,
  `line14` text COLLATE utf8mb4_unicode_ci,
  `line15` text COLLATE utf8mb4_unicode_ci,
  `line16` text COLLATE utf8mb4_unicode_ci,
  `line17` text COLLATE utf8mb4_unicode_ci,
  `line18` text COLLATE utf8mb4_unicode_ci,
  `header` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `content_threes`
--

INSERT INTO `content_threes` (`id`, `line1`, `line2`, `line3`, `line4`, `line5`, `line6`, `line7`, `line8`, `line9`, `line10`, `line11`, `line12`, `line13`, `line14`, `line15`, `line16`, `line17`, `line18`, `header`, `created_at`, `updated_at`) VALUES
(1, 'Location Sourcing', 'Venue Decoration', 'Management', 'Technical Production', 'Logistics', 'Catering', 'Marketing & Promotion', 'Ticketing & Event registration', 'Sponsorship', 'Design & Branding', 'Public Relations & Advertising', NULL, 'AR/VR/MIXR Production', 'Live Streaming', 'Post Production', NULL, NULL, NULL, 'WHAT WE DO', '0000-00-00 00:00:00', '2022-04-06 11:19:19');

-- --------------------------------------------------------

--
-- Структура таблицы `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `emails`
--

INSERT INTO `emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'team@shp.agency', NULL, '2022-04-08 10:50:39');

-- --------------------------------------------------------

--
-- Структура таблицы `event_contents`
--

CREATE TABLE `event_contents` (
  `id` int(11) NOT NULL,
  `leftitle` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `photo3` varchar(255) DEFAULT NULL,
  `photo4` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `event_contents`
--

INSERT INTO `event_contents` (`id`, `leftitle`, `title`, `photo1`, `photo2`, `photo3`, `photo4`, `icon`, `created_at`, `updated_at`) VALUES
(13, 'WHAT WE DID', 'Baker McKenzie Legal Day', '164941565501 финал.png', '16494156552.gif', '164941565503 финал.png', '164941565504 финал.png', '1649415806icon.png', '2022-04-13 12:02:06', '2022-04-13 09:02:06'),
(24, NULL, 'CITF 2018', '164941656601 финал.png', '16499317152 сконв.gif', '164941656603 финал.png', '164941656604 финал.png', '1649325524icon.png', '2022-04-14 10:21:55', '2022-04-14 07:21:55'),
(32, NULL, NULL, '', '', ' ', '', '', '2022-04-07 10:21:19', '2022-04-07 10:21:19'),
(33, 'WHAT WE DID', NULL, '', '', ' ', '', '', '2022-04-07 10:21:21', '2022-04-07 10:21:21'),
(34, 'sdasd', NULL, '', '', ' ', '', '', '2022-04-07 10:25:16', '2022-04-07 10:25:16'),
(36, NULL, NULL, '', '', ' ', '', '', '2022-04-08 08:18:20', '2022-04-08 08:18:20'),
(37, NULL, 'CIFT 2019', '164993130901 (1).gif', '164993130902.gif', '164993163003.gif', '164993163104.gif', '1649417030icon.png', '2022-04-14 10:20:31', '2022-04-14 07:20:31'),
(38, NULL, 'CIFT 2021', '16499279081-new.gif', '16499279082.gif', '16499279083.gif', '16499279084.gif', '1649417252icon.png', '2022-04-14 09:18:28', '2022-04-14 06:18:28');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `form_contacuses`
--

CREATE TABLE `form_contacuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formcontact` longtext COLLATE utf8mb4_unicode_ci,
  `formcv` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `form_contacuses`
--

INSERT INTO `form_contacuses` (`id`, `formcontact`, `formcv`, `created_at`, `updated_at`) VALUES
(1, 'Hello! My name  is  write your name. I  represent company name. We’d like to organize a conference, meet-up, etc. on date, number of people, location, budget. You can contact me at this email address.', 'Hello team! My name is Write your name here You can contact me at Phone or mail and take a look on my CV Upload from disk', NULL, '2022-04-05 02:24:43');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_contents`
--

CREATE TABLE `menu_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_contents`
--

INSERT INTO `menu_contents` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'WHAT WE DO', NULL, NULL, '2022-04-13 08:19:10'),
(2, 'PARTNERS', NULL, NULL, '2022-03-30 15:37:03'),
(3, 'WHAT WE DID', NULL, NULL, '2022-04-06 12:49:10'),
(4, 'TEAM', NULL, NULL, '2022-04-13 08:17:40'),
(5, 'CAREERS', 'CAREERS', NULL, '2022-03-28 09:27:06');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_22_105512_create_roles_table', 1),
(6, '2022_03_23_104318_create_contentheaders_table', 1),
(7, '2022_03_24_062915_create_contenttwos_table', 1),
(8, '2022_03_24_114140_create_content_fors_table', 1),
(9, '2022_03_24_120840_create_content_threes_table', 1),
(10, '2022_03_24_191615_create_content_for_links_table', 1),
(11, '2022_03_25_063844_create_content_sevens_table', 1),
(12, '2022_03_25_083234_create_content_eights_table', 1),
(13, '2022_03_25_110609_create_content_nines_table', 1),
(14, '2022_03_25_114049_create_content_nine_texts_table', 1),
(15, '2022_03_25_120452_create_content_nine_team_names_table', 1),
(16, '2022_03_25_135804_create_content_jobs_table', 1),
(17, '2022_03_26_190738_create_content_footers_table', 1),
(18, '2022_03_28_120731_create_menu_contents_table', 2),
(19, '2022_03_28_145425_create_emails_table', 3),
(20, '2022_03_29_095945_create_event_contents_table', 4),
(21, '2022_03_29_132634_create_form_contacuses_table', 5),
(22, '2022_03_29_144405_add_icon_to_event_contents', 6),
(23, '2022_03_29_144611_add_icon_to_event_contents', 7),
(24, '2022_04_05_092707_create_partners_table', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `line` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `header`, `line`, `logo`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Partners that trust us', 'a', 'a', 'a', '2022-04-06 14:28:02', '2022-04-06 11:28:02'),
(7, 'Partners that trust us', 'line1', '1649923639del pri.png', '#', '2022-04-14 08:07:19', '2022-04-14 05:07:19'),
(50, 'Partners that trust us', 'line1', '1649924850chryso.png', '#', '2022-04-14 05:27:30', '2022-04-14 05:27:30'),
(51, 'Partners that trust us', 'line1', '1649924859ecommpay.png', '#', '2022-04-14 05:27:39', '2022-04-14 05:27:39'),
(52, 'Partners that trust us', 'line1', '1649924868idek.png', '#', '2022-04-14 05:27:48', '2022-04-14 05:27:48'),
(53, 'Partners that trust us', 'line1', '1649924877invest cyprus.png', '#', '2022-04-14 05:27:57', '2022-04-14 05:27:57'),
(54, 'Partners that trust us', 'line1', '1649924884nexters.png', '#', '2022-04-14 05:28:04', '2022-04-14 05:28:04'),
(55, 'Partners that trust us', 'line1', '1649924893париматч.png', '#', '2022-04-14 05:28:13', '2022-04-14 05:28:13'),
(56, 'Partners that trust us', 'line2', '1649924979adjust.png', '#', '2022-04-14 05:29:39', '2022-04-14 05:29:39'),
(57, 'Partners that trust us', 'line2', '1649924986Cyta Business Logo only 2.png', '#', '2022-04-14 05:29:46', '2022-04-14 05:29:46'),
(58, 'Partners that trust us', 'line2', '1649924995ecomm.png', '#', '2022-04-14 05:29:55', '2022-04-14 05:29:55'),
(59, 'Partners that trust us', 'line2', '1649925004green gray.png', '#', '2022-04-14 05:30:04', '2022-04-14 05:30:04'),
(60, 'Partners that trust us', 'line2', '1649925015Layer_2.png', '#', '2022-04-14 05:30:15', '2022-04-14 05:30:15'),
(61, 'Partners that trust us', 'line2', '1649925024OK-logo-square-white 1.png', '#', '2022-04-14 05:30:24', '2022-04-14 05:30:24'),
(62, 'Partners that trust us', 'line2', '1649925030pawa.png', '#', '2022-04-14 05:30:30', '2022-04-14 05:30:30'),
(63, 'Partners that trust us', 'line3', '1649925083alive media.png', '#', '2022-04-14 05:31:23', '2022-04-14 05:31:23'),
(64, 'Partners that trust us', 'line3', '1649925091evrobank.png', '#', '2022-04-14 05:31:31', '2022-04-14 05:31:31'),
(65, 'Partners that trust us', 'line3', '1649925098Frame.png', '#', '2022-04-14 05:31:38', '2022-04-14 05:31:38'),
(66, 'Partners that trust us', 'line3', '1649925123g.png', '#', '2022-04-14 05:32:03', '2022-04-14 05:32:03'),
(67, 'Partners that trust us', 'line3', '1649925131prime.png', '#', '2022-04-14 05:32:11', '2022-04-14 05:32:11'),
(68, 'Partners that trust us', 'line3', '1649925139tengo.png', '#', '2022-04-14 05:32:19', '2022-04-14 05:32:19');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'admin', '2022-03-31 12:41:40', '2022-03-31 12:41:40'),
(3, 'user', '2022-03-31 12:41:40', '2022-03-31 12:41:40');

-- --------------------------------------------------------

--
-- Структура таблицы `test_table`
--

CREATE TABLE `test_table` (
  `id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `originpassword` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `originpassword`, `role_id`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'Admin@mail.ru', '$2y$10$0HxjDHdI2zbdriQBa0qgVuG2oiAXRD.36GTat/3v9J6RqcOecMe9q', '12345678', '2', '2022-03-31 12:41:40', '2022-03-31 14:43:36'),
(4, 'arman', 'arman@mail.ru', '$2y$10$P.tGHK.ZXtboFd37/6GCvOgw/hBBuTohrgBvCqKO3skXVFtCK/msG', '11111111', '5', '2022-03-31 12:41:40', '2022-03-31 12:41:40');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contentheaders`
--
ALTER TABLE `contentheaders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contenttwos`
--
ALTER TABLE `contenttwos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `content_for_links`
--
ALTER TABLE `content_for_links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `event_contents`
--
ALTER TABLE `event_contents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test_table`
--
ALTER TABLE `test_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `content_for_links`
--
ALTER TABLE `content_for_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `event_contents`
--
ALTER TABLE `event_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `test_table`
--
ALTER TABLE `test_table`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
