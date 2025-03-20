<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: register/login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: register/login.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Privacy Policy | Everyday Kibera.Net</title>

    <!-- favicon -->
    <link href="assets/img/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="assets/css/mobile-menu.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
<div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">


<?php include ("includes/header.php"); ?>

<div id="container1">
  <div class="content-wrapper">
    <div id="content">

        <h4> 

            <H1>EVERYDAYKIBERA.NET PRIVACY POLICY</H1>
            <H4>Last Updated on January 15, 2025</H4>

        </h4>

        <button type="button" class="collapsible">MISSION</button>
            <div class="content">
            <P>At The New York Times Company, our mission is to seek the truth and help people understand the world. We want you to understand how we handle your personal information. We also want you to know your rights and choices.

This policy describes how we handle your personal information when you use the following “Times Services”:</P>
<P>
    The New York Times print newspaper, plus our print International Edition
    Our websites, like nytimes.com and its subdomains including The Athletic and Wirecutter
    Our apps, like The New York Times app and The New York Times Games app
    Our email newsletters, like Cooking and Morning Briefing
    Our pages or ads on social media networks, like our Facebook and Instagram pages
    Anywhere we gather information from or about you and refer you to this Privacy Policy

How we handle information about you depends on which Times Services you use and how you use them. For example, we use different information about print subscribers than website visitors.

Be aware that certain Times Services work differently. Some have additional terms that supplement this policy (e.g., Reader Submissions). 

If you have questions, please don’t hesitate to contact us at privacy@nytimes.com. You can also review our Privacy F.A.Q.</P>
            </div>

        <button type="button" class="collapsible">
        1. What Information Do We Gather About You?</button>
            <div class="content">
             <p>
             The information we gather about you depends on the context. By and large, it’s information about you that can personally identify you — either on its own or when combined with other information.

The following describes the information we collect and how we obtain it.

1. (A) Information Collected through Times Services.

i. Information You Voluntarily Give Us

    For Registration:

When you sign up for a Times Service (whether via a subscription or a free account as a registered user), we collect personal identifiers such as your contact information, including your name and email address, and account credentials. We may also ask you to create an account name. Once you’re registered, we assign you a unique ID number. This ID number helps us recognize you when you’re signed in.

For some Times Services, you can instead sign up by linking your Apple, Facebook or Google account. See Information Collected From Other Sources below.

If you register for an event or conference, we might ask for additional information (e.g., your company name, your job title or your dietary restrictions). Some events and conferences may have different or additional privacy policies and terms and we recommend that you review those before you register.

You may voluntarily choose to provide additional personal information in your User Profile.</P>
<P>    For Billing:

To process payments or donations, we collect and use your payment information. This can include your name, your address, your telephone number, your email address, your credit or debit card information and any other relevant information.

    For User-Generated Content:

We offer you the ability to post content that other users can read (e.g., comments or recipe notes). Anyone can read, collect and use any personal information that accompanies your posts. See the Comments F.A.Q., the Cooking FAQ on writing personal or public notes on recipes, and read the User-Generated Content section in our Terms of Service for more information.

We do not have to publish any of your content. If the law requires us to take down, remove or edit your content, we will comply.

    For Contests, Sweepstakes and Special Offers; Notice of Financial Incentives:

From time to time, we offer certain opportunities through contests, sweepstakes, gift cards, or other special promotions and offers. When you sign up for these, you give us your name, email and any other required information.

Some such opportunities may allow you to earn “rewards” such as discounts (“Incentive Programs”) or gift cards. If this is part of the contest, sweepstake, promotion, survey or offer, we will provide you with a full description of the Incentive Program, including the benefits offered and related legal terms. Because these Incentive Programs involve the collection of personal information, they may be interpreted as “financial incentive” programs under California law (or other similar concept under another law). We use this information for the purposes described in this Privacy Policy including for targeted advertising. We may share your personal information with third parties as described in this Privacy Policy, including data analytics providers, advertising technology vendors, and social media platforms. 

The value of any financial incentive we offer is reasonably related to the value of any personal information you provide to us. We estimate the value of your personal information by considering, without limitation, the expenses we incur from collecting your personal information and/or providing the financial incentive to you, the revenue generated by your use of the financial incentive, and any improvements we can make to our products and Times Services based on information obtained through the financial incentive program. 

Please note that we may provide additional terms that apply to a particular financial incentive. If applicable, those terms will be presented to you at sign up. You may cancel your membership in such Incentive Programs at any time by contacting privacy@nytimes.com.

    For Reader Surveys, Research, Panels and Experience Programs:

We gather personal information through questionnaires, surveys and feedback programs. Some surveys may include gift cards when you participate, which may be financial incentives, as discussed above.

Surveys and Panels: Some of our surveys and feedback programs, including panels, will request your consent to provide on a purely voluntary basis information regarding your interests in various topics, including travel, entertainment and health and wellness, as well as demographic information, some of which may be considered sensitive under applicable laws such as your age, ethnicity, race, gender, sexual orientation, family characteristics and income. We use service provider platforms to support these programs and personal information is shared with them as described below with respect to service providers in general. We may also use survey providers that have their own independent relationship with you via third party sites or apps, whose practices we don’t control. We encourage you to review their policies.

We target these surveys based on a number of factors including information we automatically collect about your interests and usage, as described below. These surveys are used for a variety of purposes described throughout this Privacy Policy including research for marketing of Times Services, as well as research for third party advertisers that are interested in targeting ads to particular groups of Times readers. 

As described in more detail below, we combine information from these surveys and panels with information collected automatically from Times Services and we also apply internal or third party machine learning or artificial intelligence large language models or applications to this information (alone or in combination with other personal information we collect about you). We do this for the purposes of improving Times Services, for marketing research, to personalize marketing of Times Services to you and/or to create audiences for third party advertisers.

Recording Your Feedback: With your consent, we may record interviews with you and ask for your permission to use your voice and likeness for a variety of purposes including marketing, advertising and/or Times events.

Reader Callouts: If you participate in a reader callout on Times Services, additional terms such as our Reader Submissions terms may apply (and will be posted where we ask you to participate). 

    During Contact with Our Customer Care teams (including Call Centers (Internal and Offshore) and chat):

We collect information from you when you place an order over the phone or contact customer service through one of our toll-free numbers or via chat. This can include your name, contact information, information about your account and any other information you choose to provide. Information you share will be shared with our service providers including call agents and technology platforms.

    Refer-a-Friend:

With your consent, we comply with your requests to collect data about your friends, family or acquaintances (e.g., Refer-a-Friend campaigns). This functionality is only meant for U.S. residents. By using it, you acknowledge and agree that both you and your contacts are based in the United States — and that you have everyone’s consent for us to use their contact information.

If you’d like to invite your friends to use Times Services, we will store this information for the sole purposes of allowing you to send your friends referral offers, for determining whether your friends use Times Services after a referral is sent, and to remind your friends of the referral sent on your behalf. We also allow you to contact your friends on your own to set up leaderboards for the Mini.

iii. A Note about Sensitive Personal Information

We generally don’t want to gather sensitive personal information about you. This includes:

    Government-issued IDs (such as your driver’s license, passport or social security number)
    Your racial or ethnic origin
    Your political opinions
    Your religion or other beliefs
    Your health, biometric or genetic characteristics, including physical characteristics or descriptions
    Any trade union membership
    Your sexuality (information about your sex life or sexual orientation)
    Citizenship or immigration status
    Any criminal background
    The content of your private communications (other than messages you may send to us)
    Your precise geolocation (street level, GPS or lat/long data or other data that is derived from a device and that locates you within a geographic area that is equal to or less than the area of a circle with a radius of 1,850 feet). We sometimes collect precise geolocation information (which may be considered a sensitive data type) to provide GPS-based location services you choose to enable. 
    Account access information, such as a username and password (we collect that information only for the accounts you create directly with us and not for any other account you may have with a third party in a personal capacity).

However, as explained in detail above in the section on “Reader Surveys, Research, Panels and Experience Programs,” there are situations when we request certain of the above information (e.g., a reader survey asks about your political leanings or ethnicity). You will always have the option to decline to answer or participate in such surveys, panels or other feedback programs. Outside these situations we would prefer you never share sensitive personal information with us.

iii. Information Collected Automatically

When you use Times Services, we collect some information automatically. The technologies we use to assist with this data collection include cookies, web beacons, tags and scripts and software development kits (or SDKs). We may also use newer technologies, such as clean rooms, matching services described below (such as Unified ID 2.0 and LiveRamp’s Authenticated Traffic Solution) and Comscore’s Unified Digital Measurement (UDM) 2.0, as many browsers begin to deprecate third party cookies. We use these technologies on our digital properties, including our websites and apps, as well as in our email communications and newsletters. For more information about how to manage tracking methods on Times Services, read our Cookie Policy and the What Are Your Rights and Choices? section below.

The categories of personal information we collect automatically include:

    Identifiers and Device Information:

When you access our Times Services digitally, including our websites, apps, email communications and newsletters, our servers use a variety of technologies in order to automatically receive, record and/or log information about the device you are using, including unique identifiers. If your browser doesn’t accept our cookies or similar technologies, you can’t access certain parts of our websites (e.g., your account on nytimes.com). The items we collect include:

    Your IP address
    Cookie identifiers
    Your operating system and browser (e.g., type, version, and configuration)
    Your browser language
    Device identifiers (such as MAC address)
    Advertising identifiers
    The unique ID that we assign to you when you register, as described above

We combine this data with other information we collect about you. 

    Geolocation Information:

Where applicable, we use location information such as your city, state, zip code, to personalize content provided to you, including, but not limited to, more relevant articles, newsletters, and weather updates. For more information, please read the Personalization F.A.Q. We also use location information such as zip code to show you prices and promotions, as explained in the discussion of Personalization below.

We may also provide you with the opportunity to share your location or other locations of interest to you in your User Profile in Account in order to have a personalized experience when visiting Times Services. Please do not provide us with street level or other location information that is more granular than city or zip code, we do not want to collect your precise geolocation information for this purpose, and that kind of information may be sensitive under applicable laws.

When you provide us your billing address as a subscriber, we use that information for compliance and/or payment purposes (e.g., to determine applicable notice requirements or to specify billing currency). We may also use your billing address to personalize content for you (e.g., news about weather at that location).

Some of our apps can provide content based on your GPS location if you enable this feature. Your GPS location is your precise geolocation, which (as noted above) is considered a type of sensitive personal information. You choose whether to enable GPS features when you first install the app. You can edit that setting on your device at any time. If you enable these features, your GPS location can be found by satellite, cell phone tower or Wi-Fi and used by the app. If you save a location-based search in your history, that data moves to our service provider’s servers — see below for the definition of service provider.

If you do not enable GPS location-based services, or if a specific app does not have location-based features, we don’t collect your precise GPS location. We do collect your IP address, which can establish your approximate location. Ads on our sites and apps may be targeted based on this approximate location but are never targeted by The Times based on your GPS location.

    Other Usage Data:

We collect information about certain internet and network activity on Times Services, including your interactions with our websites and apps, such as the URLs of any pages you visit on our sites and apps, the URL of the website from which you came to our sites, how long you spent on a page, access times, search queries, and other details about your use of and actions on our Services. This also includes your interactions with marketing and advertisements on Times Services.

As described elsewhere in this Policy, we may use this usage data to personalize or customize content for you that we think you might like based on your usage patterns or for other similar purposes. We may also use it to improve the Times Services — for example, this data can tell us how often users use a particular feature of the Times Services, and we can use that knowledge to make the Times Services interesting to as many users as possible. We also use this information to serve surveys or questionnaires based on your usage patterns. We combine this data with other information we collect about you.
</P>
            </div>

        <button type="button" class="collapsible">1. (B) Inferences; Information We Create or Generate.</button>
            <div class="content">
             <p>
                The product and design team is responsible for imagining, building and maintaining the core set of experiences through which our readers discover and consume our journalism across all platforms
                We are responsible for designing, building and maintaining our iOS and Android applications, our website, our email newsletter templates, our multimedia experiences and tools that help our readers save, follow and otherwise interact with our journalism across these platforms.
            </p>
            </div>
        <button type="button" class="collapsible">Marketing - Internship and Volunteers</button>
            <div class="content">
             <p>
                Marketing plays a key part in extending the journalistic legacy and mission of The Times into the future. Our job is to answer the question, “Why is quality journalism worth paying for?” We create purposeful marketing that demonstrates our mission, how we’re leading the journalism industry and all the ways our readers can subscribe.

                Above all, we strive to be timely, straightforward and relevant in our marketing — to prove how much we value our readers and subscribers.  </p>
            </div>

        <button type="button" class="collapsible">2. (B) We Personalize Your Experience.</button>
            <div class="content">
             <p>
             We track your interests and reading habits (e.g., the articles you read) to personalize and calibrate your experience using technology like algorithmic recommendations and machine learning, which may include third party machine learning services or large language models. This is how we highlight articles you might be interested in and de-emphasize articles you’ve already read. For more information about content personalization on Times Services, you can read the Personalization F.A.Q and this blog post about how we personalize recipe recommendations. We also show you prices, promotions, products or services we believe you’ll find interesting, based on demographic and usage data, including but not limited to location data such as IP address and zip code.

2. (C) We Allow You to Share User-Generated Content.

Any information you disclose in your content or otherwise via interactive functionality becomes public — along with your chosen screen name or username and uploaded photo, if any.

2. (D) We Develop Products and Services, and Do Analysis.

We analyze data on our users’ subscriptions, purchases, registered account activity and other usage behaviors. This helps us make business and marketing decisions. This allows us to understand how users interact with Times Services and to improve and develop Times Services, including testing new features, research, surveys, analysis, and product development.

For example, our analysis, which includes the use of technology like machine learning and large language models (proprietary or third party), lets us predict preferences and price points for our products and services. It helps us determine whether our marketing is successful. It also shows us characteristics about our readers, which we share in aggregate with advertisers.

We use our own proprietary analytics services, but we also use third party analytics providers. Google Analytics is one of the analytics providers we use on certain Times Services. You can find out how Google Analytics uses data and how to opt out of Google Analytics.

2. (E) We Carry Out Administrative or Legal Tasks.

    For auditing, legal or regulatory purposes: We verify that our internal processes work as intended and comply with legal, regulatory and contractual requirements. More broadly, we process information to comply with legal, regulatory and contractual obligations and to respond to law enforcement requests (our sharing for these purposes is described in Section 3 below).
    For fraud and security monitoring: We detect and prevent cyberattacks or unauthorized robot activities, protect against or deter fraudulent, illegal, or harmful actions, and maintain the safety, security, and integrity of Times Services.
    For customer satisfaction: We assess users’ satisfaction with Times Services and our customer care team.

2. (F) We Offer Sweepstakes, Contests and Other Promotions.

As discussed above, you can take part in our sweepstakes, contests and other promotions. Some might have additional rules about how we use and disclose your personal information.

2. (G) We Allow for Personalized Advertising on Times Services and Create Audiences for Third-Party Advertisers.

We gather data and work with service providers and third parties to show you and measure the performance of personalized ads on behalf of advertisers. This data comes from ad tracking technologies set by us or the third party (e.g., cookies), the information you provide (e.g., your email address), your use of Times Services (e.g., your reading and account activity history), information from advertisers or advertising vendors (e.g., demographic data) and anything inferred from any of this information.

For example, we use Google to serve ads on Times Services. Google uses cookies or unique device identifiers, in combination with their own data, to show you ads based on your visit to nytimes.com and other sites. You can opt out of the use of certain Google cookies by visiting the related Google privacy policy.

You can find a list of some of the service providers and third parties with whom we work, and opt out links in some cases, here.

We also identify groups of users to whom to serve personalized ads on behalf of our advertisers. To do this, we combine information we collect through surveys or registration with information we collect automatically using tracking technologies while you browse our sites and apps. This combined information is used to build models. These data models are then used to measure users’ attributes, like their demographic information or their interests. Working with service providers, we use these measurements to group users by common attributes. Each group is associated with a random ID which is then passed to our ad server for use in targeting ad campaigns on our sites and apps.

We may also target third party advertising to users through matching services such as Unified ID 2.0 and LiveRamp’s Authenticated Traffic Solution (“ATS”). In these situations, we use information that directly identifies you, including name, email address, or phone number, to engage in targeted advertising, including by converting email addresses/phone numbers into identifiers used for advertising purposes. We share information that we collect from you, such as your email, IP address or information about your browser or operating system, with our identity partners/service providers, including LiveRamp Inc. LiveRamp returns an online identification code that we may store in our first-party cookie for our use in online, in-app, and cross-channel advertising and it may be shared with advertising companies to enable interest-based and targeted advertising. You can read more about LiveRamp’s privacy practice here. 

We may also collect such information (name, email, IP address, phone number and/or information about your browser or operating system) from third parties for the purposes of personalized marketing to you on Times Services and/or to create audiences for third-party advertisers.

For more information about your choices with respect to such processing, please see the What Are Your Rights and Choices? section below.

Another example is our affiliate link vendors, which we use in our guides and product recommendations. Times Services like Wirecutter may include links that will send you to vendor URLs and other services not operated or controlled by us. These vendors use cookies and other technologies to collect information about your navigation from the Times Services to the merchant you are visiting. If you buy a product after following a link to a link vendor’s URL, we may earn a commission.

Additional Notes:

    For more about targeted advertising, and how to opt out with your specific browser and device, go to the DAA Webchoices Browser Check and NAI Opt Out of Interest-Based Advertising. You can download the AppChoices app to opt out in mobile apps. You can also follow the instructions in the What Are Your Rights and Choices? section below.
    We try to limit how our third-party advertising technology vendors use the information they gather from you. Many of these providers require us to enter into contracts that allow them to optimize their own services and products, or that help them create their own. Essentially, these providers combine any information they gather about you through Times Services with information they receive from their other clients. This helps them target ads to you on behalf of their other clients, not just us.
    These third parties sometimes use other services in order to serve ads; check their privacy policies for more details. For further information on tracking technologies and your rights and choices regarding them, see the applicable Cookie Policy. As described in more detail below, residents of certain states have the right to instruct us not to “sell” or “share” their personal information and/or to opt out of “targeted advertising” and "sales" (as defined under applicable law). For more information, please see the What Are Your Rights and Choices? section below.

2. (H) We Advertise or Market Times Services to You.

We market our Times Services to you. Sometimes we use marketing vendors to do this. For example, when you visit Times Services, the Google Dynamic Floodlight tag collects data through redirects of requests from your browser to entities other than Times Services, Google, and the owner or operator of other properties on which The Times may serve marketing using Google.

We serve ads through websites, locations, platforms and services operated and owned by third parties. Often these ads are targeted at people who have visited or registered for a Times Service but have not subscribed to or purchased anything. The ads are also targeted at people with similar traits or behaviors to our subscribers or customers. We use the information described in Section 1 above, including inferences, to build audiences that may be used for purposes of these marketing initiatives. We may also make predictions using machine learning, as described above, based on a combination of different kinds of information, including survey data, to support these marketing initiatives.

We also target our advertising of Times Services to users by uploading a customer list (email addresses) to a third party, or by incorporating a tracking technology from a third party onto our Times Service. The third party then matches individuals who appear in both our data and their data.

We will take steps designed to opt you out of such matched ads if you are a resident of certain states where you have the right to opt out of such processing, as discussed further below. That being said, in order to opt out of receiving these matched ads, you should also contact the applicable third parties. For example, when we use “Custom Audiences” to serve you our ad through Facebook, you should be able to hover over the box in the right corner of that Facebook ad and opt out. We are not responsible for any third party’s failure to comply with opt-out requests. To opt out of Unified ID 2.0 (or UID 2), please visit https://www.transparentadvertising.com/.

We periodically send you targeted email newsletters or promotional emails. For information on opting out of these emails, see What Are Your Rights and Choices? below.

2. (I) We Aggregate (or De-identify) Personal Information into Larger Findings.

Sometimes we aggregate or de-identify information so that it can no longer identify you, as defined under applicable laws. This helps us better understand and represent our users, such as when we measure ad performance, create audiences for advertising or marketing interest-based segments or compile survey results. We can use and disclose this aggregated or de-identified information for any purpose, unless an applicable law says otherwise. We will maintain and use such information in deidentified form and not attempt to reidentify the information, except where reidentification is allowed by law for particular purposes.

Back to top             </p>
            </div>

      <p>

      3. To Whom Do We Disclose or Share the Information We Gather for Business and Commercial Purposes?

3. (A) Within The New York Times Company:

Our affiliates may access your information for the purposes listed here. Our affiliates include the companies on this list. 

3. (B) With Service Providers:

We work with service providers, as defined above, to carry out certain tasks, including the following business purposes:

    Processing your payments
    Fulfilling your orders
    Maintaining technology and related infrastructure
    Offering you customer service
    Serving and targeting ads and measuring ad performance (including counting ad impressions of unique visitors, verifying positioning and quality of ad impressions and auditing compliance with these specifications and other standards)
    Presenting surveys
    Shipping you products and mailings
    Distributing emails
    List processing and analytics
    Managing and analyzing research
    Managing promotions
    Detecting security incidents, protecting against malicious, deceptive, fraudulent, or illegal activity, and debugging to identify and repair errors that impair existing intended functionality.

When performing these tasks, service providers often have access to your personal information.

We sometimes allow them to use aggregated or de-identified information for other purposes, in accordance with applicable laws.

3. (C) With Other Third Parties:

There are situations when we disclose your information to third parties beyond our service providers. For example, as discussed above in Section 2(G) and (H), we share your email address and other personal information with third parties both for marketing of Times Services across third party sites and services, and to support matching for third party advertising on Times Services. Those emails may or may not be hashed when they are shared with third parties.

It is worth noting how practices of certain vendors and changes in law outside of our control have changed what we can say about this. First, as noted elsewhere in this Policy, to the extent regulators take the position that the disclosure of information for matched ads is a “sale,” we will take steps designed to opt you out of such matched ads if you are a resident of an applicable jurisdiction and you exercise your right not to have your personal information “sold.” As noted above, you may also have to contact certain third parties to opt out of such matched ads.

Second, at least one of our vendors uses pseudonymized email addresses they receive from us to power products that they provide to us and their other customers. Therefore, it is possible that your email address, which was shared with our vendor to provide services to us, is being used in pseudonymized form by the vendor to provide products and services to other companies.

While we try to control the behavior of our vendors that we understand to be service providers, some of those vendors engage in activities beyond our control that may be seen by a regulator as the activities of “third parties,” not service providers.

The following provides more information about the circumstances in which we know we are disclosing personal information to third parties that are not service providers.

i. If you’re a U.S. print subscriber, we may provide your name and mailing address (among other information) to other companies that want to market to you by mail. This may be a “sale” of personal information under the law of some jurisdictions. If you prefer we don’t share this information, refer below to What Are Your Rights and Choices? below.

ii. We provide information to third party advertisers and their agencies as described in Section 2(G) above. With the evolution of advertising technology, and the deprecation of third-party cookies, our advertising business is also changing and we share your first party data with advertisers and their agencies in some cases.

iii. We provide information to websites, locations, platforms and services operated and owned by third parties in connection with marketing, as described in Section 2(H) above.

iv. We provide information about our live event and conference attendees (e.g., your name, your company or your job title) to the event sponsors. In those cases, we notify you when you provide us the information.

v. We provide information about participants in our sweepstakes, contests and similar promotions to the promotions’ sponsors. In those cases, we notify you when you provide us the information.

vi. We process payments you make through Times Services with external services. There are two ways this can happen:

    We collect your information and provide it to the third-party service for processing (such as Worldpay).
    The third-party service collects your information for processing.

vii. In the event of a reorganization, merger, sale, joint venture, assignment, transfer or other disposition of all or any portion of our business, assets or stock (including in connection with any bankruptcy or similar proceedings), we would have a legitimate interest in disclosing or transferring your information to a third party — such as an acquiring entity and its advisers.

viii. We can preserve or disclose personal information if the law requires us to do so. We can also preserve or disclose personal information if we believe it would be necessary to:

    Comply with the law or with legal process
    Protect and defend our rights and property
    Protect against misuse or unauthorized use of the Times Services
    Protect the safety or property of our personnel, users or the general public (e.g., if you provide false information or attempt to pose as someone else, we could share your information to help investigations into your actions)
    Cooperate with government authorities, which could be outside your country of residence.

ix. We disclose public activities in our RSS feeds, APIs and other distribution formats. Your public activities could thus appear on other websites, blogs or feeds. As described above in the section on user-generated content, information that you make public will be shared with other users, including user profile information. Please remember that any content you upload to your public user profile, along with any personal information or content that you voluntarily disclose online in a manner other users can view becomes publicly available, and can be collected and used by anyone. Your username may also be displayed to other users if and when you send messages or comments or upload images or videos through Times Services, and other users may be able to contact you through messages and comments.

x. If you use a promotional or discount code that you receive from another company in order to purchase Times Services, we will share the fact that you redeemed that code with that third party company.

As described above in Section 2(I), we may disclose aggregated or de-identified information for any purpose, unless an applicable law says otherwise.

Back to top
4. What Are Your Rights and Choices?

We provide a variety of ways for you to control the personal information we hold about you, including choices about how we use that information. In some jurisdictions, these controls and choices are enforceable as rights under applicable law. The choices described below are limited to the specific email address, phone or device used. They won’t affect different email addresses, phones or devices used, or subsequent subscriptions.

4. (A) In General

i. Communications Preferences

    Email:

We offer a variety of commercial emails and email newsletters. You can unsubscribe from emails and email newsletters from The Times, including emails regarding The Athletic, by following the instructions near the bottom of the email. You can also email us at privacy@nytimes.com.

You can also manage your nytimes.com newsletter and marketing communications preferences.

To stop receiving emails and email newsletters sent directly by The Athletic, you must separately manage your communications preferences on your The Athletic settings page or contact The Athletic.

    Mail or Telephone Promotions:

You can ask us to unsubscribe from our mail or telephone solicitations. In some jurisdictions, as discussed elsewhere in this Policy, you can also ask us to not share your information with third parties for marketing purposes. To do so, call us at 1-800-698-4637 or chat with us. You may also email us at privacy@nytimes.com with “Opt Out” in the subject line and your account number and phone number in the body of the email.

For International Edition customers, you can write us at: The New York Times International Edition, Subscription Dept. 8 Bloomsbury Street, London, WC1B 3SR, United Kingdom. Please include your account number and phone number in the body of the letter.

    Push Notifications:

You can opt out any time by adjusting your device settings, or uninstalling our app.

    Text Messages:

You can opt out of text alerts any time by replying “STOP,” or any alternative keyword we’ve shared with you.

We complete any opt-out request as quickly as we can. This opt-out request won’t prohibit us from sending you important nonmarketing notices.

ii. Access, Correct, Change/Update, Delete or Restrict Processing of Your Personal Information

In some jurisdictions, you may exercise the following choices:

    Access, modify or delete the personal information we have about you
    Be informed of or receive an electronic copy of the personal information we have about you, for data portability.
    Restrict, or object to, how we process personal information about you

For example, in the European Union and the United Kingdom, you have the right to object to, or obtain a restriction of, the processing of your personal information under certain circumstances; and where the processing is based on your consent, you have a right to withdraw that consent at any time for future processing.

If you’d like to exercise any of the above choices, contact us via this form or by calling us at our toll-free number, 1-800-NYTIMES. In order to exercise your choices for The Athletic, click here or contact privacy@theathletic.com. In your request, please be specific. State the information you want changed, whether you’d like your information suppressed from our database or whether there are limitations you’d like us to put on how we use your personal information. Please use the email address linked to that personal information — we only complete requests on the information linked to your email address. To verify your identity, we will email the email address you provide us and wait for your response. In some instances, we may also ask for additional information. This is how we verify your identity before complying. If you use Times Services without creating an account and signing in, there may be no reasonable means by which we can verify your identity or the personal information related to you.

In some jurisdictions, you can designate an authorized agent to make a request on your behalf. In order to do that, please provide the agent with written permission, signed by you, authorizing the agent to submit the request on your behalf. The agent must submit that written permission along with the request. We may contact you to verify your identity — and the authorized agent’s permission — before a response to the request is sent.

We’ll respond to your request in a manner consistent with applicable law, including any exceptions that may result in a request being denied in whole or in part.

We might need to keep certain information for recordkeeping purposes, or to complete a transaction you began prior to requesting a change or deletion (e.g., if you make a purchase or enter a promotion, you might not be able to change or delete the personal information provided until after the completion of the purchase or promotion).

In some cases, your request doesn’t ensure complete removal of the content or information.

iii. Managing Your Digital and Home Delivery Accounts

You can update your account information and see your transaction history (if you are an International Edition print subscriber, use this link instead). If you need assistance, call our toll-free number, 1-800-NYTIMES. Other local numbers are available.

Managing your account information works differently if you subscribed via Apple’s App Store or Google Play. Please register with us to access the Account area and contact Apple or Google for your transaction history.

iv. Browser and Platform Controls

    Cookie Controls:

Most web browsers are set to accept cookies by default. If you prefer, you can go to your browser settings to learn how to delete or reject cookies. If you choose to delete or reject cookies, this could affect certain features or services of our websites. If you choose to delete cookies, settings and preferences controlled by those cookies, including advertising preferences, may be deleted and may need to be recreated. For more information, read our Cookie Policy.

In certain jurisdictions, you may also be able to manage your cookie preferences through our consent management platform.

    Global Privacy Control:

Some browsers and browser extensions support the Global Privacy Control (“GPC”) that can send a signal to the websites you visit indicating your choice to opt-out from certain types of data processing, including data "sales" as defined under certain laws. In certain territories, when we detect such a signal, we will make reasonable efforts to respect your choices indicated by a GPC setting as required by applicable law.

    Do Not Track:

Some browsers include a "Do Not Track" (DNT) setting that can send a signal to the websites you visit indicating you do not wish to be tracked. Unlike the GPC described above, there is not a common understanding of how to interpret the DNT signal; therefore, our websites do not respond to browser DNT signals. Instead, you can use the range of other tools to control data collection and use, including the cookie controls and advertising controls described above.

    Mobile Advertising ID Controls:

iOS and Android operating systems provide options to limit tracking and/or reset the advertising IDs.

    Email Web Beacons:

Most email clients have settings which allow you to prevent the automatic downloading of images, including web beacons, which prevents the automatic connection to the web servers that host those images.

    LiveRamp ATS:

To opt out of LiveRamp’s ATS, described in greater detail above, please click here.

v. Opt Out of Targeted Advertising and “Sales or Sharing” of Personal Information

Residents of certain jurisdictions, including several US states, have the right to opt out of targeted advertising and "sales or sharing" (as defined under applicable law) of their personal information. If you are in one of those jurisdictions, in order to exercise your right to opt out of targeted advertising or "sales" of your personal information, please click on the “Your Privacy Choices” link at the bottom of the webpage where your information is being collected or go to “Account” and then “Settings,” and “Privacy Settings” and click the “Your Privacy Choices” link there. California residents can review relevant information relating to California privacy laws below. 

vi. Delete My Account

You have the ability to delete your registered user account in New York Times native apps and on the web at nytimes.com/account, and separately in The Athletic’s app. If you delete your registered user account in the New York Times native apps or on the web at nytimes.com/account, we will, except where otherwise restricted by law, delete you from our registered user database and remove you from our email marketing and newsletter lists. If you delete your registered user account in The Athletic’s app, we will, except where otherwise restricted by law, delete you from our registered user database, however you will need to separately unsubscribe from The Athletic’s emails and email newsletters as explained in Section 4(A)(i) above. If you are a subscriber, you will need to cancel any active subscriptions and wait for their benefits to end before deleting your account. Even if you have never created a separate account with The Athletic, it is possible that The Athletic has created such an account for you. You must take additional steps to delete that separate account with The Athletic even if you delete your New York Times account.

vii. Other Rights and Choices

You will not receive discriminatory treatment by us for the exercise of your privacy rights.

This Policy has been designed to be accessible to people with disabilities. If you experience difficulties accessing this Policy, please contact us at privacy@nytimes.com. If you’d like, you can lodge a complaint with a data protection authority. A list of E.U. data protection authorities is available. But we encourage you to first contact us with any questions or concerns.

In some jurisdictions, you may appeal to us if we refuse to take action on your exercise of certain choices described above. In order to appeal such a refusal, please contact us at privacy@nytimes.com using the subject line “Appeal of Refusal to Take Action on Privacy Request” and provide the relevant information in the email.

4. (B) California Privacy Notices and Rights

If you are a California resident, you have certain rights with respect to your personal information. 

i. Notice at Collection and Notice of Financial Incentives

At or before the time of collection, you have a right to receive notice of our practices, including the categories of personal information and sensitive personal information to be collected, the purposes for which such information is collected or used, whether such information is "sold or shared" as defined under California law and how long such information is retained. You can find those details in this Privacy Policy by clicking on the above links.

For the Notice of Financial Incentives, see Section 1(A)(i) above.

ii. Rights to Know, Correction and Deletion

You have a right to request that we disclose to you the personal information we have collected about you. You also have a right to request additional information about our collection, use, disclosure, or sale of such personal information. Note that we have provided much of this information in this Privacy Policy. You also have rights to request that we correct inaccurate personal information and that we delete personal information under certain circumstances, subject to a number of exceptions. Under the CCPA, these rights are subject to certain exceptions: for example, we may need to retain your personal information to provide you with Times Services or to complete a transaction or other action you have requested. If your request is subject to one of these exceptions, we may deny your request.

Please see Access, Correct, Change/Update, Delete, or Restrict Processing of Your Personal Information above for details, including on how to exercise these rights and how we verify your identity.

iii. “Do Not Sell or Share My Personal Information”

To the extent The New York Times Company “sells” your personal information (as the term “sell” is defined under the CCPA), you have the right to opt-out of that “sale” on a going-forward basis at any time. 

If you’re a California resident, you have a right to opt-out from the “sale” or “sharing” of your personal information with third parties who are not our service providers (as those terms are defined under the California Consumer Privacy Act and the California Privacy Rights Act, or “CCPA” for short in this Policy). To exercise this right, click the "Your Privacy Choices" link on the bottom of the webpage where your information is being collected or go to “Account” and then “Settings,” and “Privacy Settings” and click the “Your Privacy Choices” link there. You can also submit a request to opt-out by emailing us at privacy@nytimes.com with the subject line “California Resident - Do Not Sell or Share.” Finally, if your browser supports it, you can turn on the Global Privacy Control to opt-out of the “sale” or “sharing” of your personal information.

If you have an account with certain Times Services (specifically nytimes.com, cooking.nytimes.com, nytimes.com/crosswords, the New York Times app, the New York Times Cooking app and the New York Times Games app) and are logged in, we will save your preference and honor your opt-out request across browsers and devices so long as you remain logged in. If you are not logged in, or do not have an account with any Times Services listed above, your opt-out of the “sale” or “sharing” of personal information will be specific to the browser or device from which you have clicked “Your Privacy Choices” and until you clear your cookies (or local storage in apps) on this browser or device.

We do not knowingly “sell” or “share” (as those terms are defined by the CCPA) the personal information of minors under 16 years old.

iv. Right to Limit Use and Disclosure of Sensitive Personal Information

If you are a California resident, you have a right to limit our use of sensitive personal information for any purposes other than to provide the services or goods you request or as otherwise permitted by law. To opt-out from such additional purposes, contact us via this form or by calling us at our toll-free number, 1-800-NYTIMES. To opt-out from such additional purposes from The Athletic, contact us via this form.

v. Authorized Agents

You can designate an authorized agent to make a request to exercise your rights under the CCPA on your behalf. In order to do that, please provide the agent with written permission, signed by you, authorizing the agent to submit the request on your behalf. The agent must submit that written permission along with the request. We may contact you to verify your identity — and the authorized agent’s permission — before a response to the request is sent.

vi. Non-Discrimination Rights

You may exercise any of your rights listed in this section without fear of unlawful discrimination.

vii. Record of Requests

We keep a record of requests that we received from California residents.

For data deletion and data access requests, our readers submit requests through our intake form. In the intake form, they mark whether they reside in California. We then send an identity verification email to the user. If the user does not verify their identity in 45 days, their request will be denied. If the user does verify in 45 days, we begin to fulfill their request.

We have calculated our median process time for verified data deletion and data access requests. Any requests completed within the same day are rounded to one day. The median process time is found by organizing the processing time of each verified request from lowest to highest. The middle number is the median.

        </p>

        <P>5. How Long Do You Retain Data?

We store your personal information for as long as needed, or permitted, based on the reason why we obtained it (consistent with applicable law). This means we might retain your personal information even after you close your account with us.

When deciding how long to keep your information, we consider:

    How long we have had a relationship with you or provided a Times Service to you
    Whether we are subject to any legal obligations (e.g., any laws that require us to keep transaction records for a certain period of time before we can delete them)
    Whether we have taken any legal positions (e.g., in connection with any statutes of limitation)

Rather than delete your data, we might de-identify or mask it by removing certain identifying details.

Back to top
6. How Do You Protect My Information?

We protect your personal information with appropriate organizational, technological and physical safeguards — but we cannot guarantee its absolute security. We recommend that you use complex and unique passwords for your Times accounts and for third-party accounts linked to them. Do not share your password with anyone.

If you have reason to believe your interaction with us is no longer secure, notify us immediately.

Back to top
7. Are There Guidelines for Children?

Times Services are intended for a general audience and are not directed at children under (13) years of age.

We do not knowingly gather personal information (as defined by the U.S. Children’s Privacy Protection Act, or COPPA) in a manner not permitted by COPPA. If you are a parent or guardian and you believe we have collected information from your child in a manner not permitted by law, contact us at privacy@nytimes.com. We will remove the data to the extent required by applicable laws.

Back to top
8. How Is Information Transferred Internationally?

The New York Times Company is headquartered in the United States. If you are located outside the United States, your information is collected in your country and then transferred to the United States — or to another country in which we (or our affiliates or service providers) operate.

If we transfer your data out of the European Economic Area (E.E.A.), the United Kingdom and/or Switzerland, we implement at least one of the three following safeguards:

    We transfer your information to countries that have been recognized by the European Commission as providing an adequate level of data protection according to E.E.A. standards (see the full list of these countries).
    We take steps to ensure that the recipient is bound by contractual obligations, including E.U. Standard Contractual Clauses together with addenda or language to cover the UK and/or Switzerland, as applicable, and additional safeguards to protect your personal data. You can see a copy of these clauses.
    We confirm that the service provider to which we are transferring data has an active self-certification under the EU-U.S. Data Privacy Framework (DPF), the UK Extension to the EU-U.S. DPF, and/or the Swiss-U.S. DPF, as applicable.

In certain situations, the courts, law enforcement agencies, regulatory agencies or security authorities in those countries might be entitled to access your personal information.

Back to top
9. What Is Our Legal Basis?

In some jurisdictions, like the European Union and the European Economic Area, we only collect, use or share information about you when we have a valid reason. This is called a “lawful basis.” Specifically, this is one of the following:

    The consent you provide to us at the point of collection of your information
    The performance of the contract we have with you
    The compliance of a legal obligation to which we are subject, or
    The legitimate interests of The Times or a third party. “Legitimate interest” is a technical term under international laws, including the European Union General Data Protection Regulation. It means that there are good reasons for the processing of your personal information, and that we take measures to minimize the impact on your privacy rights and interests. “Legitimate interest” also refers to our use of your data in ways you would reasonably expect and that have a minimal privacy impact.

We have a legitimate interest in gathering and processing personal information, for example: (1) to ensure that our networks and information are secure; (2) to administer and generally conduct business within The New York Times Company; (3) to prevent fraud; and (4) to conduct our marketing activities.

Back to top
10. What about Third-Party Services?

Some Times Services contain links to third-party websites, resources, vendors and advertisers, or can be experienced via third party platforms. These third parties are not Times Services. Additionally, Times Services may be available to you through third-party digital properties such as Google’s Accelerated Mobile Pages (AMP). We do not control (and are not responsible for) third party content or privacy practices. These third parties may independently collect and solicit information about you and affect your data preferences when you access the Times Services on third-party digital properties (see “Additional Notes” below for more information). Any personal information you provide to them is not covered by this Privacy Policy. These third parties have their own policies and practices about data, which may include what information they share with us, your rights and choices on their services and devices, and whether they store information in the U.S. or elsewhere. We encourage you to familiarize yourself with their privacy policies and terms of use.

Additional Notes

    As mentioned above, some Times Services are offered on third-party digital properties (such as third-party websites, frameworks, and domains) which can affect our data practices and your data preferences. For example, we use Google AMP to help Times Services load quickly on mobile devices. We also use third-party properties to facilitate other Times Services, such as our Live Events.
    If you set your data preferences while using one of these third-party digital properties, your preferences will only be saved with respect to the Times Services on that specific third-party digital property. Your preferences will not carry over when you use the Times Services on The Times’s own digital properties. And, your preferences will only be saved on Google AMP and other third-party digital properties until your cookies are cleared. Once your cookies are cleared, you will need to reset your data preferences for each third-party digital property used to access Times Services.
    If your browser settings allow for cross-site tracking (e.g., allows for trackers to follow your preferences across websites), you can set your preferences on The Times’s digital properties so that your preferences will be remembered when you access the Times Services through Google AMP. However, if your browser settings do not allow for cross-site tracking, your preferences on The Times’s own digital properties will not carry over to the Times Services you access through Google AMP.
    If you are a European resident and you do not accept trackers (other than essential trackers) while using Times Services on AMP, you will be served non-personalized ads. If you do not accept trackers (other than essential trackers) while using the Times Services on The Times’s digital properties, you will receive The Times house ads or no ads at all.

Back to top
11. How Are Changes to this Privacy Policy Communicated?

We are always improving our products and services, and we create new features regularly. These updates sometimes require us to collect new information or use what we already have differently. Further, the laws regarding personal information and privacy frequently change. As a result, we must periodically update this Privacy Policy.

We will post any changes on this page by updating this policy. If we make a significant or material change in the way we collect, use or share your personal information, we will notify you at least 30 days prior to the changes taking effect. We will do this via email or prominent notice within Times Services. If you object to any change, you can stop using the Times Services.

After we post any changes on this page, your continued use of Times Services is subject to the updated Privacy Policy.

Back to top
12. How Can You Contact Us? Who Is the Controller of Your Personal Information?

If you have any questions, email us at privacy@nytimes.com or write us at:

The New York Times Company
620 Eighth Avenue
New York, N.Y. 10018
Attn.: Privacy Counsel

We can also be reached by phone at 1-800-NYTIMES (see a list of our local telephone numbers outside the United States).

The New York Times Company is referred to in this Privacy Policy as “The Times,” “we” or “our.”

Certain Times Services operate as independent controllers of your personal information. Wirecutter operates as an independent controller of personal information collected through the Wirecutter site available at nytimes.com/wirecutter, pages or ads on social media networks, email messages sent by Wirecutter, your offline contacts and any other service offered by Wirecutter (collectively, the “Wirecutter Services”). If you have any questions regarding Wirecutter, email us at privacy@nytimes.com or write us at:

Wirecutter, Inc.
c/o The New York Times Company
620 Eighth Avenue
New York, N.Y. 10018
Attn.: Legal Department

Wirecutter operates the Wirecutter Services in accordance with the practices disclosed in this Privacy Policy. With respect to the Wirecutter Services, Wirecutter, Inc. is referred to in this Privacy Policy as included in “The Times,” “we” or “our.” In this Privacy Policy, Wirecutter Services are included under “Times Services.”

The Athletic also operates as an independent controller of personal information collected through The Athletic site available at nytimes.com/athletic and The Athletic mobile app, The Athletic’s pages or ads on social media networks, email messages sent by The Athletic and any other services offered by The Athletic (“The Athletic Services”). If you have any questions regarding The Athletic, please contact The Athletic at privacy@theathletic.com.

The Athletic operates The Athletic Services in accordance with the practices disclosed in this Privacy Policy. With respect to The Athletic Services, The Athletic Media Company and its subsidiaries are referred to in this Privacy Policy as included in “The Times,” “we” or “our.” In this Privacy Policy, The Athletic Services are included under “Times Services.”

Back to top</P>

    </div>
    <div class="category_article_wrapper"></div>
  </div>

<?php include ("includes/footer.php"); ?>

</div>


<!-- #main-wrapper -->

<!-- jquery Core-->
<script src="assets/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Theme Menu -->
<script src="assets/js/mobile-menu.js"></script>

<!-- Owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Theme Script -->
<script src="assets/js/script.js"></script>
</body>

</html>