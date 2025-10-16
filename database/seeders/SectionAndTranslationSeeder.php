<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Translation;
use Illuminate\Database\Seeder;

class SectionAndTranslationSeeder extends Seeder
{
	public function run(): void
	{
		$this->seedSections();
		$this->seedTranslations();
	}

	private function seedSections(): void
	{
		$sections = [
			'en' => [
				'hero' => [
					'title' => 'Fall in love.',
					'title_highlight' => 'Offline!',
					'subheading' => 'Spooned - Fall in love. Offline!',
					'text' => 'Have you had enough of superficial swiping? Meet singles offline. Our unique offline dating platform is free of fake profiles, irrelevant matches and superficial chats.',
				],
				'launch' => [
					'title' => 'Curious about Spooned?',
					'subheading' => "Whether you're single or simply a fan of our idea - be part of it from the very beginning and secure your spot at the launch event.",
					'countdown_target' => '2026-05-25T23:59:59',
				],
				'our_goal' => [
					'title' => 'Our goal',
					'text_content' => 'Experience natural encounters at carefully curated events, professional advice from couples therapists and break through old relationship patterns. For a sustainable partnership.',
				],
				'features_teasers' => [
					'first_title' => 'Not in the mood for',
					'title_highlight' => 'dating apps?',
					'first_text' => 'Spooned is different. Real encounters instead of endless swiping. Get to know potential partners at our exclusive offline events - in a relaxed atmosphere, authentically and without any pressure. You simply pick an event you enjoy – spend time doing something you love, discover something new and meet other singles along the way. No matter how the day turns out, your time is always well spent.',
					'second_title' => 'Tired',
					'second_title_highlight' => 'of dating?',
					'second_text' => "We are convinced that getting to know people should be efficient, uncomplicated and inspiring. That's why we don't focus on superficial similarities at our dating events, but on values and ideas about life that suit each other.",
					'third_title' => 'Discover your',
					'third_title_highlight' => 'relationship patterns.',
					'third_text' => "Take the opportunity to explore your attachment style in a guided psychotherapeutic interview. We'll help you understand why relationships fail and how you can learn from past mistakes. Gain new insights and open yourself up to love again.",
					'fourth_title' => 'No',
					'fourth_title_highlight' => 'fake',
					'fourth_title_2' => 'profiles!',
					'fourth_text' => "Spooners are real! Thanks to strict verification and personal interviews, we make sure that you only meet real, seriously interested people and thus prevent unpleasant surprises.",
					'fifth_title' => 'We accompany you beyond',
					'fifth_title_highlight' => 'the first date.',
					'fifth_text' => "First date, butterflies in your tummy - and then? We are convinced that a relationship doesn't just start, it grows. That's why we're there for you - from the first date to a long-term partnership. Benefit from scientifically sound psychological support. Ready to give the right encounter a real chance?",
				],
				'stay_loop' => [
					'title' => 'Stay in the loop',
					'text' => 'Receive exclusive updates and stay informed',
				],
				'our_events' => [
					'title' => 'Our Events,',
					'title_highlight' => 'Your Lovestories',
				],
				'registration_s' => [
					'title' => 'Interested in becoming one of the',
					'title_highlight' => 'first users?',
					'text' => 'Become part of our first test user community! Take part in our launch events and get access to exclusive offers!',
					'form_title' => 'Registration',
					'form_text' => '*There is a limited number of places available for Beta Testers',
				],
				'event_partner' => [
					'title' => 'Become an event partner',
					'text' => 'As we are constantly expanding our offer, we are always on the lookout for event partners. Do you have an idea or a specific offer? Then get in touch with us!',
				],
				'help_section' => [
					'title_highlight' => 'Help',
					'title' => 'develop your dating experience',
					'text' => 'Click on the field and give us Feedback, so we can start working on thing that matter to you',
				],
				'help_questions' => [
					'q1' => 'What do you think of the idea of taking part in a group date?',
					'q2' => 'What would motivate you to take part in a dating event?',
					'q3' => 'What kind of atmosphere would you like at a dating event?',
					'q4' => 'Have you already taken part in a dating event? If so, what did you like or what did you dislike?',
					'q5' => 'What would you like to see at a dating event to make it more successful and enjoyable?',
					'q6' => 'Would you rather take part in an event that focuses on a shared hobby or interest (e.g. a cooking class, hiking) or a classic get-to-know-you event?',
					'q7' => 'What are your expectations of a dating event? What elements must be included?',
					'q8' => 'What do you need to feel comfortable on a group date? Are there certain formats that help you to open up and make contact?',
				],
			],
			'de' => [
				'hero' => [
					'title' => 'Fall in love.',
					'title_highlight' => 'Offline!',
					'subheading' => 'Spooned – Verliebe dich. Offline!',
					'text' => 'Hast du genug von oberflächlichem Swipen? Lerne Singles offline kennen. Unsere einzigartige Offline-Dating-Plattform ist frei von Fake-Profilen, belanglosen Matches und oberflächlichen Chats.',
				],
				'launch' => [
					'title' => 'Neugierig auf Spooned?',
					'subheading' => 'Ob Single oder einfach Fan unserer Idee – sei von Anfang an dabei und sichere dir jetzt deinen Platz beim Launch-Event.',
					'countdown_target' => '2026-05-25T23:59:59',
				],
				'our_goal' => [
					'title' => 'Unser Ziel',
					'text_content' => 'Erlebe natürliche Begegnungen auf sorgfältig kuratierten Events, professionelle Beratung durch Paartherapeut*innen und durchbreche alte Beziehungsmuster. Für eine nachhaltige Partnerschaft.',
				],
				'features_teasers' => [
					'first_title' => 'Keine Lust auf',
					'title_highlight' => 'Dating Apps?',
					'first_text' => 'Spooned ist anders. Echte Begegnungen statt endloses Swipen. Auf unseren exklusiven Offline-Events lernst du potenzielle Partner*innen kennen – in entspannter Atmosphäre, authentisch und ganz ohne Druck. Du suchst dir ein Event aus das dir gefällt – verbringst Zeit mit etwas, das dir Freude macht, lernst Neues dazu und triffst ganz nebenbei andere Singles. Ganz egal, was der Tag bringt: Deine Zeit ist gut investiert!',
					'second_title' => 'Müde vom',
					'second_title_highlight' => 'Dating?',
					'second_text' => 'Wir sind überzeugt: Kennenlernen soll effizient, unkompliziert und inspirierend sein. Deshalb setzen wir bei unseren Dating-Events nicht auf oberflächliche Gemeinsamkeiten, sondern Werte und Lebensvorstellungen, die zueinander passen.',
					'third_title' => 'Lerne deine',
					'third_title_highlight' => 'Beziehungsmuster kennen.',
					'third_text' => 'Nutze die Gelegenheit und erfahre mehr über deine Bindungsmuster in einem psychotherapeutisch geführten Interview. Wir erklären dir, warum Beziehungen scheitern und wie du aus früheren Fehlern lernen kannst. Nutze deine Erkenntnis und verliebe dich neu.',
					'fourth_title' => 'Keine',
					'fourth_title_highlight' => 'Fake-',
					'fourth_title_2' => 'Profile!',
					'fourth_text' => 'Spooners sind echt! Dank strenger Verifizierung und persönlichen Interviews stellen wir sicher, dass du nur auf echte, ernsthaft interessierte Menschen triffst, und beugen so bösen Überraschungen vor.',
					'fifth_title' => 'Wir begleiten dich über das',
					'fifth_title_highlight' => 'erste Date hinaus.',
					'fifth_text' => 'Erstes Treffen, Schmetterlinge im Bauch – und dann? Wir sind überzeugt, dass eine Beziehung nicht nur entsteht, sondern wächst. Deshalb sind wir für dich da – vom ersten Treffen bis zur langfristigen Partnerschaft. Profitiere von wissenschaftlich fundierter, psychologischer Unterstützung. Bereit, der richtigen Begegnung eine echte Chance zu geben?',
				],
				'stay_loop' => [
					'title' => 'Informiert bleiben',
					'text' => 'Bleib auf dem neusten Stand und erhalte exklusive Updates',
				],
				'our_events' => [
					'title' => 'Unsere Events,',
					'title_highlight' => 'Deine Liebesgeschichten',
				],
				'registration_s' => [
					'title' => 'Interessiert daran',
					'title_highlight' => 'Beta-Tester*in zu werden?',
					'text' => 'Werde Teil unserer ersten Community von Testnutzern! Nimm an unseren Launch-Events teil und erhalte Zugang zu exklusiven Angeboten!',
					'form_title' => 'Registrierung',
					'form_text' => '*Die Anzahl der Plätze für Beta-Tester*in ist begrenzt',
				],
				'event_partner' => [
					'title' => 'Werde Eventpartner',
					'text' => 'Da wir unser Angebot ausbauen, halten wir laufend Ausschau nach Eventpartnern. Hast du eine Idee oder ein konkretes Angebot? Dann melde dich bei uns!',
				],
				'help_section' => [
					'title_highlight' => 'Hilf mit,',
					'title' => 'dein Dating-Erlebnis zu verbessern!',
					'text' => 'Klicke auf das Feld und gib uns Feedback, damit wir an den Dingen arbeiten können, die dir wichtig sind!',
				],
				'help_questions' => [
					'q1' => 'Was hältst du von der Idee, an einem Gruppendate teilzunehmen?',
					'q2' => 'Was würde dich motivieren, an einem Dating-Event teilzunehmen?',
					'q3' => 'Welche Atmosphäre wünschst du dir bei einem Dating-Event?',
					'q4' => 'Hast du bereits an einem Dating-Event teilgenommen? Wenn ja, was hat dir gefallen oder was hat dich gestört?',
					'q5' => 'Was würdest du dir bei einem Dating-Event wünschen, um es erfolgreicher und angenehmer zu gestalten?',
					'q6' => 'Würdest du eher an einem Event teilnehmen, das sich auf ein gemeinsames Hobby oder Interesse konzentriert (z. B. ein Kochkurs, Wandern) oder ein klassisches Kennenlernen-Event?',
					'q7' => 'Was sind deine Erwartungen an ein Dating-Event? Welche Elemente müssen unbedingt dabei sein?',
					'q8' => 'Was brauchst du, um dich bei einem Gruppendate wohlzufühlen? Gibt es bestimmte Formate, die dir dabei helfen, dich zu öffnen und in Kontakt zu kommen?',
				],
			],
		];

		foreach ($sections as $locale => $group) {
			foreach ($group as $key => $content) {
				Section::updateOrCreate(
					['key' => $key, 'locale' => $locale],
					['title' => $content['title'] ?? null, 'content' => $content]
				);
			}
		}
	}

	private function seedTranslations(): void
	{
		$en = json_decode($this->englishJson(), true);
		$de = json_decode($this->germanJson(), true);

		$this->flattenAndInsert('default', 'en', $en);
		$this->flattenAndInsert('default', 'de', $de);
	}

	private function flattenAndInsert(string $namespace, string $locale, array $data, string $prefix = ''): void
	{
		foreach ($data as $key => $value) {
			$fullKey = ltrim($prefix . ($prefix ? '.' : '') . $key, '.');
			if (is_array($value) && $this->isAssoc($value)) {
				$this->flattenAndInsert($namespace, $locale, $value, $fullKey);
			} else {
				Translation::updateOrCreate(
					['namespace' => $namespace, 'key' => $fullKey, 'locale' => $locale],
					['value' => is_array($value) ? json_encode($value, JSON_UNESCAPED_UNICODE) : (string) $value]
				);
			}
		}
	}

	private function isAssoc(array $arr): bool
	{
		return array_keys($arr) !== range(0, count($arr) - 1);
	}

	private function englishJson(): string
	{
		return <<<'JSON'
{
  "navbar": {
    "about": "About Spooned",
    "blog": "Blog",
    "newsletter": "Be an EventPartner",
    "beta-tester": "Be a Beta Tester"
  },
  "hero": {
    "title": "Fall in love.",
    "title_highlight": "Offline!",
    "subheading": "Spooned - Fall in love. Offline!",
    "text": "Have you had enough of superficial swiping? Meet singles offline. Our unique offline dating platform is free of fake profiles, irrelevant matches and superficial chats."
  },
  "launch": {
    "title": "Curious about Spooned?",
    "subheading": "Whether you're single or simply a fan of our idea - be part of it from the very beginning and secure your spot at the launch event."
  },
  "time": {
    "days": "days",
    "hours": "hours",
    "minutes": "minutes",
    "seconds": "seconds"
  },
  "newsletter": {
    "email_require": "Email address is required.",
    "email_not_valid": "Please enter a valid email address.",
    "subscribing": "Subscribing",
    "subscribed": "Subscribed!",
    "notify": "Notify me"
  },
  "our_goal": {
    "title": "Our goal",
    "text_content": "Experience natural encounters at carefully curated events, professional advice from couples therapists and break through old relationship patterns. For a sustainable partnership."
  },
  "features_teasers": {
    "first_title": "Not in the mood for",
    "title_highlight": "dating apps?",
    "first_text": "Spooned is different. Real encounters instead of endless swiping. Get to know potential partners at our exclusive offline events - in a relaxed atmosphere, authentically and without any pressure. You simply pick an event you enjoy – spend time doing something you love, discover something new and meet other singles along the way. No matter how the day turns out, your time is always well spent.",
    "second_title": "Tired",
    "second_title_highlight": "of dating?",
    "second_text": "We are convinced that getting to know people should be efficient, uncomplicated and inspiring. That's why we don't focus on superficial similarities at our dating events, but on values and ideas about life that suit each other.",
    "third_title": "Discover your",
    "third_title_highlight": "relationship patterns.",
    "third_text": "Take the opportunity to explore your attachment style in a guided psychotherapeutic interview. We'll help you understand why relationships fail and how you can learn from past mistakes. Gain new insights and open yourself up to love again.",
    "fourth_title": "No",
    "fourth_title_highlight": "fake",
    "fourth_title_2": "profiles!",
    "fourth_text": "Spooners are real! Thanks to strict verification and personal interviews, we make sure that you only meet real, seriously interested people and thus prevent unpleasant surprises.",
    "fifth_title": "We accompany you beyond",
    "fifth_title_highlight": "the first date.",
    "fifth_text": "First date, butterflies in your tummy - and then? We are convinced that a relationship doesn't just start, it grows. That's why we're there for you - from the first date to a long-term partnership. Benefit from scientifically sound psychological support. Ready to give the right encounter a real chance?"
  },
  "stay_loop": {
    "title": "Stay in the loop",
    "text": "Receive exclusive updates and stay informed"
  },
  "our_events": {
    "title": "Our Events,",
    "title_highlight": "Your Lovestories"
  },
  "registration_s": {
    "title": "Interested in becoming one of the",
    "title_highlight": "first users?",
    "text": "Become part of our first test user community! Take part in our launch events and get access to exclusive offers!",
    "form_title": "Registration",
    "form_text": "*There is a limited number of places available for Beta Testers"
  },
  "event_partner": {
    "title": "Become an event partner",
    "text": "As we are constantly expanding our offer, we are always on the lookout for event partners. Do you have an idea or a specific offer? Then get in touch with us!"
  },
  "help_section": {
    "title_highlight": "Help",
    "title": "develop your dating experience",
    "text": "Click on the field and give us Feedback, so we can start working on thing that matter to you"
  },
  "staff": {
    "melanie": {
      "name": "Melanie Pahud",
      "occupations": ["Event Manager", "Creative Maker", "World Explorer"],
      "quote": "Melanie ensures that every event is more than just a meeting - it's a real experience. Her energy is infectious, her eye for detail makes all the difference."
    },
    "larissa": {
      "name": "Larissa Cano",
      "occupations": [
        "Couples & Psychotherapist",
        "Relationship Professional",
        "People Lover"
      ],
      "quote": "Relationships are no coincidence - they are the result of dynamics, patterns and decisions. Larisa decodes these and helps people to build real connections that last."
    },
    "adrian": {
      "name": "Adrian Cano",
      "occupations": ["Dentist", "Entrepreneur", "Solution Finder"],
      "quote": "Thinking in terms of possibilities rather than boundaries - Adrian loves developing smart solutions and bringing people together. A creative mind with entrepreneurial drive and an eye for the essentials."
    },
    "alban": {
      "name": "Alban Nevzati",
      "occupations": ["Banker", "Entrepreneur", "Numbers man"],
      "quote": "Visions need substance - and Alban delivers it. He ensures that Spooned is not only a good concept, but also grows sustainably."
    },
    "christoph": {
      "name": "Christoph Zuberbühler",
      "occupations": ["Designer", "Idea Developer", "Aesthetics Lover"],
      "quote": "Chris thinks in shapes, colors and concepts. His mission? To design Spooned in such a way that it not only works, but also impresses."
    }
  },
  "forms": {
    "first_name": "First name",
    "last_name": "Last name",
    "sex": "Sex",
    "sex_male": "Male",
    "sex_female": "Female",
    "sex_other": "Other",
    "email": "E-mail",
    "date_of_birth": "Date of birth",
    "name": "Name",
    "company_name": "Company name",
    "telephone": "Telephone",
    "message": "Message",
    "send": "Send",
    "sign_up": "Sign Up"
  },
  "validation": {
    "firstname_required": "First name is required (min 2 chars).",
    "surname_required": "Surname is required (min 2 chars).",
    "sex_required": "Sex is required.",
    "valid_email_required": "Valid email is required.",
    "dob_required": "Date of Birth is required.",
    "name_required": "Name is required (min 2 chars).",
    "age_18_plus": "Must be 18+ years old."
  },
  "help_questions": {
    "q1": "What do you think of the idea of taking part in a group date?",
    "q2": "What would motivate you to take part in a dating event?",
    "q3": "What kind of atmosphere would you like at a dating event?",
    "q4": "Have you already taken part in a dating event? If so, what did you like or what did you dislike?",
    "q5": "What would you like to see at a dating event to make it more successful and enjoyable?",
    "q6": "Would you rather take part in an event that focuses on a shared hobby or interest (e.g. a cooking class, hiking) or a classic get-to-know-you event?",
    "q7": "What are your expectations of a dating event? What elements must be included?",
    "q8": "What do you need to feel comfortable on a group date? Are there certain formats that help you to open up and make contact?"
  },
  "footer": {
    "imprint": "Imprint",
    "email": "Email",
    "data_protection": "Data protection",
    "imprint_text": "Legal Notice:\nSpooned GmbH\nSonnhaldenstrasse 7b\n8184 Bachenbülach\nSwitzerland\nCommercial Register Entry: Registered with the Commercial Register of the Canton of Zurich\nUID Number: CHE-393.396.342\nLegal Form: Limited Liability Company (GmbH)\nShare Capital: CHF 20,000.00\nAuthorized Representative:\nAdrian Cano, Managing Director\nContact:\nEmail: hello@spooned.ch\nPhone: +41 76 840 45 54\n\nDisclaimer\nThe contents of this website have been created with the greatest care. However, Spooned GmbH assumes no liability for the accuracy, completeness, or timeliness of the contents. Use of the content is at the user’s own risk.\n\nLiability for Links\nOur website contains links to external third-party websites over which we have no control. Therefore, we cannot assume any responsibility for such external content. The respective provider or operator of the linked sites is always responsible for the content of those sites.\n\nCopyright\nThe content and works published on this website are subject to Swiss copyright law. Any duplication, processing, distribution, or exploitation outside the limits of copyright requires the prior written consent of Spooned GmbH. Where content on this website was not created by Spooned GmbH, the copyrights of third parties are respected.",
    "privacy_text": "Privacy Policy:\n1. Responsible Entity\nSpooned GmbH\nSonnhaldenstrasse 7b\n8184 Bachenbülach\nEmail: hello@spooned.ch\nPhone: +41 76 840 45 54\n\n2. Applicable Law\nThis Privacy Policy is based on the Swiss Data Protection Act (DSG). Where applicable, the provisions of the European Union’s General Data Protection Regulation (GDPR) also apply.\n\n3. Collection and Processing of Data\nWe collect and process personal data only insofar as this is necessary to provide our services. This includes in particular: Registration and contact data; Identity verification data; Interview and profile data; Payment information; Usage and communication data.\n\n4. Purpose of Data Processing\nProvision and improvement of our services; Communication with users; Conducting security checks; Organizing and executing events; Personalized matchmaking; Compliance with legal obligations.\n\n5. Newsletter & Contact Forms\nWhen you sign up for our newsletter, register as a beta tester or event partner, or submit a contact form, we store the personal data you provide solely for processing your request and for the corresponding communication.\n\n6. Disclosure to Third Parties\nYour data will only be disclosed to necessary service providers or where there is a legal obligation.\n\n7. Data Transfers Abroad\nData may be transferred abroad, particularly when using IT service providers or cloud services located outside Switzerland.\n\n8. Storage and Deletion\nWe store personal data only as long as necessary to provide our services or to comply with legal obligations.\n\n9. Data Security\nWe implement appropriate technical and organizational measures to protect personal data.\n\n10. Rights of Data Subjects\nYou have the right at any time to access, correct, delete (subject to legal retention), restrict processing, and revoke consent.\n\n11. Cookies and Tracking\nOur website uses cookies and similar technologies to analyze usage, personalize content, and optimize our services.\n\n12. Changes\nSpooned GmbH reserves the right to amend this Privacy Policy at any time. The current version is available on our website."
  },
  "cookie": {
    "title": "We use cookies",
    "text": "Our website uses cookies and similar technologies to analyze usage, personalize content, and optimize our services. You can choose which categories you wish to allow. Essential cookies are required for the proper functioning of the website.",
    "accept_all": "Accept all",
    "only_essential": "Only essential cookies"
  },
  "legal": {
    "impressum_title": "Legal Notice",
    "impressum_text": "Spooned GmbH\nSonnhaldenstrasse 7b\n8184 Bachenbülach\nSwitzerland\n\nCommercial Register Entry: Registered with the Commercial Register of the Canton of Zurich\nUID Number: CHE-393.396.342\nLegal Form: Limited Liability Company (GmbH)\nShare Capital: CHF 20,000.00\n\nAuthorized Representative:\nAdrian Cano, Managing Director\n\nContact:\nEmail: hello@spooned.ch\nPhone: +41 76 840 45 54\n\nDisclaimer\nThe contents of this website have been created with the greatest care. However, Spooned GmbH assumes no liability for the accuracy, completeness, or timeliness of the contents. Use of the content is at the user’s own risk.\n\nLiability for Links\nOur website contains links to external third-party websites over which we have no control. Therefore, we cannot assume any responsibility for such external content. The respective provider or operator of the linked sites is always responsible for the content of those sites.\n\nCopyright\nThe content and works published on this website are subject to Swiss copyright law. Any duplication, processing, distribution, or exploitation outside the limits of copyright requires the prior written consent of Spooned GmbH. Where content on this website was not created by Spooned GmbH, the copyrights of third parties are respected.",
    "privacy_title": "Privacy Policy",
    "privacy_text": "1. Responsible Entity\nSpooned GmbH\nSonnhaldenstrasse 7b\n8184 Bachenbülach\nEmail: hello@spooned.ch\nPhone: +41 76 840 45 54\n\n2. Applicable Law\nThis Privacy Policy is based on the Swiss Data Protection Act (DSG). Where applicable, the provisions of the European Union’s General Data Protection Regulation (GDPR) also apply.\n\n3. Collection and Processing of Data\nRegistration and contact data\nIdentity verification data (relevant only for later platform use)\nInterview and profile data (relevant only for later platform use)\nPayment information (relevant only for later platform use)\nUsage and communication data\n\n4. Purpose of Data Processing\nProvision and improvement of our services\nCommunication with users\nConducting security checks\nOrganizing and executing events\nPersonalized matchmaking\nCompliance with legal obligations\n\n5. Newsletter & Contact Forms\nWhen you sign up for our newsletter, register as a beta tester or event partner, or submit a contact form, we store the personal data you provide solely for processing your request and for the corresponding communication.\n\n6. Disclosure to Third Parties\nYour data will only be disclosed to necessary service providers (e.g., IT providers, newsletter services) or where there is a legal obligation. We ensure that such third parties maintain an adequate level of data protection.\n\n7. Data Transfers Abroad\nData may be transferred abroad, particularly when using IT service providers or cloud services located outside Switzerland. In such cases, we ensure that an adequate level of data protection is guaranteed in accordance with the DSG/GDPR (e.g., through Standard Contractual Clauses).\n\n8. Storage and Deletion\nWe store personal data only as long as necessary to provide our services or to comply with legal obligations. After this period, the data is deleted or anonymized.\n\n9. Data Security\nWe implement appropriate technical and organizational measures to protect personal data against loss, misuse, unauthorized access, or manipulation.\n\n10. Rights of Data Subjects\nObtain information about the data we hold on you\nCorrect inaccurate data\nRequest deletion of your data, provided no legal retention obligations apply\nRestrict the processing of your data\nRevoke any consent given, with effect for the future\n\n11. Cookies and Tracking\nOur website uses cookies and similar technologies (e.g., local storage, pixels, tags) to analyze usage, personalize content, and optimize our services.\n\n12. Changes to this Privacy Policy\nSpooned GmbH reserves the right to amend this Privacy Policy at any time. The current version is always available on our website."
  }
}
JSON;
	}

	private function germanJson(): string
	{
		return <<<'JSON'
{
  "navbar": {
    "about": "Über Spooned",
    "blog": "Blog",
    "newsletter": "Eventpartner werden",
    "beta-tester": "Betatester*in werden"
  },
  "hero": {
    "title": "Fall in love.",
    "title_highlight": "Offline!",
    "subheading": "Spooned – Verliebe dich. Offline!",
    "text": "Hast du genug von oberflächlichem Swipen? Lerne Singles offline kennen. Unsere einzigartige Offline-Dating-Plattform ist frei von Fake-Profilen, belanglosen Matches und oberflächlichen Chats."
  },
  "time": {
    "days": "Tage",
    "hours": "Stunden",
    "minutes": "Minuten",
    "seconds": "Sekunden"
  },
  "launch": {
    "title": "Neugierig auf Spooned?",
    "subheading": "Ob Single oder einfach Fan unserer Idee – sei von Anfang an dabei und sichere dir jetzt deinen Platz beim Launch-Event."
  },
  "newsletter": {
    "email_require": "E-Mail-Adresse ist erforderlich",
    "email_not_valid": "Bitte geben Sie eine gültige E-Mail-Adresse ein.",
    "subscribing": "Abonnieren",
    "subscribed": "Abonniert!",
    "notify": "Infos erhalten"
  },
  "our_goal": {
    "title": "Unser Ziel",
    "text_content": "Erlebe natürliche Begegnungen auf sorgfältig kuratierten Events, professionelle Beratung durch Paartherapeut*innen und durchbreche alte Beziehungsmuster. Für eine nachhaltige Partnerschaft."
  },
  "features_teasers": {
    "first_title": "Keine Lust auf",
    "title_highlight": "Dating Apps?",
    "first_text": "Spooned ist anders. Echte Begegnungen statt endloses Swipen. Auf unseren exklusiven Offline-Events lernst du potenzielle Partner*innen kennen – in entspannter Atmosphäre, authentisch und ganz ohne Druck. Du suchst dir ein Event aus das dir gefällt – verbringst Zeit mit etwas, das dir Freude macht, lernst Neues dazu und triffst ganz nebenbei andere Singles. Ganz egal, was der Tag bringt: Deine Zeit ist gut investiert!",
    "second_title": "Müde vom",
    "second_title_highlight": "Dating?",
    "second_text": "Wir sind überzeugt: Kennenlernen soll effizient, unkompliziert und inspirierend sein. Deshalb setzen wir bei unseren Dating-Events nicht auf oberflächliche Gemeinsamkeiten, sondern Werte und Lebensvorstellungen, die zueinander passen.",
    "third_title": "Lerne deine",
    "third_title_highlight": "Beziehungsmuster kennen.",
    "third_text": "Nutze die Gelegenheit und erfahre mehr über deine Bindungsmuster in einem psychotherapeutisch geführten Interview. Wir erklären dir, warum Beziehungen scheitern und wie du aus früheren Fehlern lernen kannst. Nutze deine Erkenntnis und verliebe dich neu.",
    "fourth_title": "Keine",
    "fourth_title_highlight": "Fake-",
    "fourth_title_2": "Profile!",
    "fourth_text": "Spooners sind echt! Dank strenger Verifizierung und persönlichen Interviews stellen wir sicher, dass du nur auf echte, ernsthaft interessierte Menschen triffst, und beugen so bösen Überraschungen vor.",
    "fifth_title": "Wir begleiten dich über das",
    "fifth_title_highlight": "erste Date hinaus.",
    "fifth_text": "Erstes Treffen, Schmetterlinge im Bauch – und dann? Wir sind überzeugt, dass eine Beziehung nicht nur entsteht, sondern wächst. Deshalb sind wir für dich da – vom ersten Treffen bis zur langfristigen Partnerschaft. Profitiere von wissenschaftlich fundierter, psychologischer Unterstützung. Bereit, der richtigen Begegnung eine echte Chance zu geben?"
  },
  "stay_loop": {
    "title": "Informiert bleiben",
    "text": "Bleib auf dem neusten Stand und erhalte exklusive Updates"
  },
  "our_events": {
    "title": "Unsere Events,",
    "title_highlight": "Deine Liebesgeschichten"
  },
  "registration_s": {
    "title": "Interessiert daran",
    "title_highlight": "Beta-Tester*in zu werden?",
    "text": "Werde Teil unserer ersten Community von Testnutzern! Nimm an unseren Launch-Events teil und erhalte Zugang zu exklusiven Angeboten!",
    "form_title": "Registrierung",
    "form_text": "*Die Anzahl der Plätze für Beta-Tester*in ist begrenzt"
  },
  "event_partner": {
    "title": "Werde Eventpartner",
    "text": "Da wir unser Angebot ausbauen, halten wir laufend Ausschau nach Eventpartnern. Hast du eine Idee oder ein konkretes Angebot? Dann melde dich bei uns!"
  },
  "help_section": {
    "title_highlight": "Hilf mit,",
    "title": "dein Dating-Erlebnis zu verbessern!",
    "text": "Klicke auf das Feld und gib uns Feedback, damit wir an den Dingen arbeiten können, die dir wichtig sind!"
  },
  "staff": {
    "melanie": {
      "name": "Melanie Pahud",
      "occupations": ["Eventmanagerin", "Kreative Macherin", "Weltenbummlerin"],
      "quote": "Melanie sorgt dafür, dass jedes Event mehr als nur ein Treffen ist – sondern ein echtes Erlebnis. Ihre Energie ist ansteckend, ihr Blick fürs Detail macht den Unterschied."
    },
    "larissa": {
      "name": "Larissa Cano",
      "occupations": [
        "Paar- & Psychotherapeutin",
        "Beziehungsprofi",
        "Menschenliebhaberin"
      ],
      "quote": "Beziehungen sind kein Zufall – sie entstehen aus Dynamik, Mustern und Entscheidungen. Larissa entschlüsselt diese und hilft Menschen, echte Verbindungen aufzubauen, die langfristig halten."
    },
    "adrian": {
      "name": "Adrian Cano",
      "occupations": ["Zahnarzt", "Unternehmer", "Lösungsfinder"],
      "quote": "Denken in Möglichkeiten statt in Grenzen – Adrian liebt es, smarte Lösungen zu entwickeln und Menschen zusammenzubringen. Ein kreativer Kopf mit unternehmerischem Drive und einem Auge fürs Wesentliche."
    },
    "alban": {
      "name": "Alban Nevzati",
      "occupations": ["Banker", "Unternehmer", "Zahlenmensch"],
      "quote": "Visionen brauchen Substanz – und Alban liefert sie. Er sorgt dafür, dass Spooned nicht nur ein gutes Konzept ist, sondern auch nachhaltig wächst."
    },
    "christoph": {
      "name": "Christoph Zuberbühler",
      "occupations": ["Designer", "Ideenentwickler", "Ästhetikliebhaber"],
      "quote": "Chris denkt in Formen, Farben und Konzepten. Seine Mission? Spooned so zu gestalten, dass es nicht nur funktioniert, sondern auch beeindruckt."
    },
    "staff": {
      "melanie": {
        "name": "Melanie Pahud",
        "occupations": [
          "Eventmanagerin",
          "Kreative Macherin",
          "Weltenbummlerin"
        ],
        "quote": "Melanie sorgt dafür, dass jedes Event mehr als nur ein Treffen ist – sondern ein echtes Erlebnis. Ihre Energie ist ansteckend, ihr Blick fürs Detail macht den Unterschied."
      },
      "larissa": {
        "name": "Larissa Cano",
        "occupations": [
          "Paar- & Psychotherapeutin",
          "Beziehungsprofi",
          "Menschenliebhaberin"
        ],
        "quote": "Beziehungen sind kein Zufall – sie entstehen aus Dynamik, Mustern und Entscheidungen. Larissa entschlüsselt diese und hilft Menschen, echte Verbindungen aufzubauen, die langfristig halten."
      },
      "adrian": {
        "name": "Adrian Cano",
        "occupations": ["Zahnarzt", "Unternehmer", "Lösungsfinder"],
        "quote": "Denken in Möglichkeiten statt in Grenzen – Adrian liebt es, smarte Lösungen zu entwickeln und Menschen zusammenzubringen. Ein kreativer Kopf mit unternehmerischem Drive und einem Auge fürs Wesentliche."
      },
      "alban": {
        "name": "Alban Nevzati",
        "occupations": ["Banker", "Unternehmer", "Zahlenmensch"],
        "quote": "Visionen brauchen Substanz – und Alban liefert sie. Er sorgt dafür, dass Spooned nicht nur ein gutes Konzept ist, sondern auch nachhaltig wächst."
      },
      "christoph": {
        "name": "Christoph Zuberbühler",
        "occupations": ["Designer", "Ideenentwickler", "Ästhetikliebhaber"],
        "quote": "Chris denkt in Formen, Farben und Konzepten. Seine Mission? Spooned so zu gestalten, dass es nicht nur funktioniert, sondern auch beeindruckt."
      }
    }
  },
  "forms": {
    "first_name": "Vorname",
    "last_name": "Nachname",
    "sex": "Geschlecht",
    "sex_male": "Männlich",
    "sex_female": "Weiblich",
    "sex_other": "Divers",
    "email": "E-Mail",
    "date_of_birth": "Geburtsdatum",
    "name": "Name",
    "company_name": "Firmenname",
    "telephone": "Telefon",
    "message": "Nachricht",
    "send": "Senden",
    "sign_up": "Anmelden"
  },
  "validation": {
    "firstname_required": "Vorname ist erforderlich (mind. 2 Zeichen).",
    "surname_required": "Nachname ist erforderlich (mind. 2 Zeichen).",
    "sex_required": "Geschlecht ist erforderlich.",
    "valid_email_required": "Gültige E-Mail ist erforderlich.",
    "dob_required": "Geburtsdatum ist erforderlich.",
    "name_required": "Name ist erforderlich (mind. 2 Zeichen).",
    "age_18_plus": "Sie müssen mindestens 18 Jahre alt sein."
  },
  "help_questions": {
    "q1": "Was hältst du von der Idee, an einem Gruppendate teilzunehmen?",
    "q2": "Was würde dich motivieren, an einem Dating-Event teilzunehmen?",
    "q3": "Welche Atmosphäre wünschst du dir bei einem Dating-Event?",
    "q4": "Hast du bereits an einem Dating-Event teilgenommen? Wenn ja, was hat dir gefallen oder was hat dich gestört?",
    "q5": "Was würdest du dir bei einem Dating-Event wünschen, um es erfolgreicher und angenehmer zu gestalten?",
    "q6": "Würdest du eher an einem Event teilnehmen, das sich auf ein gemeinsames Hobby oder Interesse konzentriert (z. B. ein Kochkurs, Wandern) oder ein klassisches Kennenlernen-Event?",
    "q7": "Was sind deine Erwartungen an ein Dating-Event? Welche Elemente müssen unbedingt dabei sein?",
    "q8": "Was brauchst du, um dich bei einem Gruppendate wohlzufühlen? Gibt es bestimmte Formate, die dir dabei helfen, dich zu öffnen und in Kontakt zu kommen?"
  },
  "footer": {
    "imprint": "Impressum",
    "email": "E-Mail",
    "data_protection": "Datenschutz",
    "imprint_text": "Impressum:\nSpooned GmbH\nSonnhaldenstrasse 7b\n8184 Bachenbülach\nSchweiz\nHandelsregistereintrag: Eingetragen im Handelsregister des Kantons Zürich\nUID-Nummer: CHE-393.396.342\nRechtsform: Gesellschaft mit beschränkter Haftung (GmbH)\nStammkapital: CHF 20'000.00\nVertretungsberechtigte Person:\nAdrian Cano, Geschäftsführer\nKontakt:\nE-Mail: hello@spooned.ch\nTel.: +41 76 840 45 54\n\nHaftungsausschluss\nDie Inhalte dieser Website wurden mit grösster Sorgfalt erstellt. Dennoch übernimmt die Spooned GmbH keine Gewähr für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte. Die Nutzung der Inhalte erfolgt auf eigene Verantwortung.\n\nHaftung für Links\nUnsere Website enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Für diese fremden Inhalte übernehmen wir keine Gewähr. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber verantwortlich.\n\nUrheberrecht\nDie auf dieser Website veröffentlichten Inhalte und Werke unterliegen dem schweizerischen Urheberrecht. Jede Art der Vervielfältigung, Bearbeitung, Verbreitung oder Verwertung ausserhalb der Grenzen des Urheberrechts bedarf der schriftlichen Zustimmung der Spooned GmbH. Soweit die Inhalte nicht von Spooned GmbH erstellt wurden, werden die Urheberrechte Dritter beachtet.",
    "privacy_text": "Datenschutzerklärung:\n1. Verantwortliche Stelle\nSpooned GmbH\nSonnhaldenstrasse 7b\n8184 Bachenbülach\nE-Mail: hello@spooned.ch\nTel.: +41 76 840 45 54\n\n2. Anwendbares Recht\nDiese Datenschutzerklärung basiert auf dem Schweizer Datenschutzgesetz (DSG). Soweit anwendbar, gelten zusätzlich die Bestimmungen der Datenschutz-Grundverordnung (DSGVO) der Europäischen Union.\n\n3. Erhebung und Verarbeitung von Daten\nWir erheben und verarbeiten personenbezogene Daten nur, soweit dies für die Bereitstellung unserer Dienstleistungen erforderlich ist.\n\n4. Zweck der Datenverarbeitung\nBereitstellung und Verbesserung unserer Dienstleistungen; Kommunikation; Sicherheitsprüfungen; Organisation und Durchführung von Events; Personalisierte Zuordnung (Matching); Erfüllung gesetzlicher Pflichten.\n\n5. Newsletter & Kontaktformulare\nBei Anmeldung zu Newsletter, als Beta-Tester*in oder Eventpartner*in bzw. bei Kontaktformularen verwenden wir die angegebenen Daten ausschliesslich zur Bearbeitung der Anfrage.\n\n6. Weitergabe an Dritte\nEine Weitergabe erfolgt nur an notwendige Dienstleister oder bei gesetzlicher Verpflichtung.\n\n7. Datenübermittlung ins Ausland\nKann erfolgen, z. B. bei Nutzung von IT-/Cloud-Dienstleistern, mit angemessenem Datenschutzniveau.\n\n8. Speicherung und Löschung\nWir speichern Daten nur solange erforderlich; danach Löschung oder Anonymisierung.\n\n9. Datensicherheit\nAngemessene technische und organisatorische Massnahmen zum Schutz personenbezogener Daten.\n\n10. Rechte der betroffenen Personen\nAuskunft, Berichtigung, Löschung (sofern keine Aufbewahrungspflichten), Einschränkung, Widerruf.\n\n11. Cookies und Tracking\nEinsatz von Cookies/ähnlichen Technologien zur Analyse, Personalisierung und Optimierung.\n\n12. Änderungen\nSpooned GmbH behält sich Änderungen dieser Datenschutzerklärung vor; die aktuelle Version ist auf der Website abrufbar."
  },
  "cookie": {
    "title": "Wir verwenden Cookies",
    "text": "Unsere Website nutzt Cookies und ähnliche Technologien, um die Nutzung zu analysieren, Inhalte zu personalisieren und unsere Dienstleistungen zu optimieren. Sie können selbst entscheiden, welche Kategorien Sie zulassen möchten. Notwendige Cookies sind für den Betrieb der Website unverzichtbar.",
    "accept_all": "Alle akzeptieren",
    "only_essential": "Nur notwendige Cookies"
  },
  "legal": {
    "impressum_title": "Impressum",
    "impressum_text": "Spooned GmbH\nSonnhaldenstrasse 7b\n8184 Bachenbülach\nSchweiz\n\nHandelsregistereintrag: Eingetragen im Handelsregister des Kantons Zürich\nUID-Nummer: CHE-393.396.342\nRechtsform: Gesellschaft mit beschränkter Haftung (GmbH)\nStammkapital: CHF 20'000.00\n\nVertretungsberechtigte Person:\nAdrian Cano, Geschäftsführer\n\nKontakt:\nE-Mail: hello@spooned.ch\nTel.: +41 76 840 45 54\n\nHaftungsausschluss\nDie Inhalte dieser Website wurden mit grösster Sorgfalt erstellt. Dennoch übernimmt die Spooned GmbH keine Gewähr für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte. Die Nutzung der Inhalte erfolgt auf eigene Verantwortung.\n\nHaftung für Links\nUnsere Website enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Für diese fremden Inhalte übernehmen wir keine Gewähr. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber verantwortlich.\n\nUrheberrecht\nDie auf dieser Website veröffentlichten Inhalte und Werke unterliegen dem schweizerischen Urheberrecht. Jede Art der Vervielfältigung, Bearbeitung, Verbreitung oder Verwertung ausserhalb der Grenzen des Urheberrechts bedarf der schriftlichen Zustimmung der Spooned GmbH. Soweit die Inhalte nicht von Spooned GmbH erstellt wurden, werden die Urheberrechte Dritter beachtet.",
    "privacy_title": "Datenschutzerklärung",
    "privacy_text": "1. Verantwortliche Stelle\nSpooned GmbH\nSonnhaldenstrasse 7b\n8184 Bachenbülach\nE-Mail: hello@spooned.ch\nTel.: +41 76 840 45 54\n\n2. Anwendbares Recht\nDiese Datenschutzerklärung basiert auf dem Schweizer Datenschutzgesetz (DSG). Soweit anwendbar, gelten zusätzlich die Bestimmungen der Datenschutz-Grundverordnung (DSGVO) der Europäischen Union.\n\n3. Erhebung und Verarbeitung von Daten\nRegistrierungs- und Kontaktdaten\nDaten zur Identitätsprüfung (erst für spätere Nutzung der Plattform relevant)\nInterview- und Profildaten (erst für spätere Nutzung der Plattform relevant)\nZahlungsinformationen (erst für spätere Nutzung der Plattform relevant)\nNutzungs- und Kommunikationsdaten\n\n4. Zweck der Datenverarbeitung\nBereitstellung und Verbesserung unserer Dienstleistungen\nKommunikation mit Nutzerinnen und Nutzern\nDurchführung von Sicherheitsprüfungen\nOrganisation und Durchführung von Events\nPersonalisierung der Zuordnung (Matching)\nErfüllung gesetzlicher Pflichten\n\n5. Newsletter & Kontaktformulare\nWenn Sie sich für unseren Newsletter, als Beta-Tester oder Eventpartner anmelden oder ein Kontaktformular ausfüllen, speichern wir die von Ihnen angegebenen Daten (z. B. Name, E-Mail-Adresse, Nachricht) ausschliesslich zur Bearbeitung Ihrer Anfrage und für die entsprechende Kommunikation.\n\n6. Weitergabe an Dritte\nEine Weitergabe Ihrer Daten erfolgt ausschliesslich an notwendige Dienstleister (z. B. IT-Anbieter, Newsletter-Dienste) oder wenn eine gesetzliche Verpflichtung besteht. Dabei stellen wir sicher, dass die Dritten ein angemessenes Datenschutzniveau gewährleisten.\n\n7. Datenübermittlung ins Ausland\nEine Übermittlung von Daten ins Ausland kann erfolgen, insbesondere wenn wir IT-Dienstleister oder Cloud-Services mit Sitz ausserhalb der Schweiz einsetzen. In diesem Fall achten wir darauf, dass ein angemessenes Datenschutzniveau gemäss DSG/DSGVO gewährleistet ist (z. B. durch Standardvertragsklauseln).\n\n8. Speicherung und Löschung\nWir speichern personenbezogene Daten nur so lange, wie dies zur Erbringung unserer Dienstleistungen oder zur Einhaltung gesetzlicher Pflichten erforderlich ist. Danach werden die Daten gelöscht oder anonymisiert.\n\n9. Datensicherheit\nWir setzen angemessene technische und organisatorische Massnahmen ein, um personenbezogene Daten vor Verlust, Missbrauch, unbefugtem Zugriff oder Manipulation zu schützen.\n\n10. Rechte der betroffenen Personen\nAuskunft über die bei uns gespeicherten Daten\nBerichtigung unrichtiger Daten\nLöschung Ihrer Daten, soweit keine gesetzlichen Aufbewahrungspflichten entgegenstehen\nEinschränkung der Verarbeitung\nWiderruf einer Einwilligung mit Wirkung für die Zukunft\n\n11. Cookies und Tracking\nUnsere Website verwendet Cookies und ähnliche Technologien (z. B. Local Storage, Pixel, Tags), um die Nutzung zu analysieren, Inhalte zu personalisieren und unsere Dienstleistungen zu optimieren.\n\nNotwendige Cookies: für den Betrieb der Website erforderlich\nFunktionale Cookies: erhöhen den Nutzungskomfort\nAnalyse-Cookies: ermöglichen die Erstellung von Besuchsstatistiken\nMarketing-/Tracking-Cookies: dienen dazu, relevante Inhalte oder Werbung anzuzeigen\n\n12. Änderungen dieser Datenschutzerklärung\nSpooned GmbH behält sich vor, diese Datenschutzerklärung jederzeit anzupassen. Die jeweils aktuelle Version ist auf unserer Website abrufbar."
  }
}
JSON;
	}
}


