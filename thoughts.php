<?php
	include_once 'header.php';
?>
			<div class="page-head" data-bg-image="https://www.htmlcsscolor.com/preview/gallery/797979.png">
				<div class="container">
					<h2 class="page-title">Thoughts of the day</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">

						<div class="row">
							<div class="content col-md-8">
								<h2 class="section-title">Thought of the day :</h2>
								<br/>
								<h3>Day : 
									"<span id="day-id">
									
									</span>"
								</h3><br/>
								<h3>
									<div>
										Date : <span id="date"></span>-<span id="month"></span>-<span id="year"></span>
									</div>
								</h3>
								<br/>
								<h3>Thought : 
									<span id="thought" style="font-size: 16px; text-transform: lowercase;">

									</span>
								</h3>
								<script type="text/javascript">
									var now = new Date();
									var start = new Date(now.getFullYear(), 0, 0);
									var diff = (now - start) + ((start.getTimezoneOffset() - now.getTimezoneOffset()) * 60 * 1000);
									var oneDay = 1000 * 60 * 60 * 24;
									var day = Math.floor(diff / oneDay);
									
									var titles = [
									" And our hope for you is firm, because we know that just as you share in our sufferings, so also you share in our comfort. - 2 Corinthians 1:7",
									" The weapons we fight with are not the weapons of the world. On the contrary, they have divine power to demolish strongholds. We demolish arguments and every pretension that sets itself up against the knowledge of God, and we take captive every thought to make it obedient to Christ. -2 Corinthians 10:4-5",
									  "Therefore, if anyone is in Christ, he is a new creation; the old has gone, the new has come! - 2 Corinthians 5:17 ",
									   "For God did not give us a spirit of timidity, but a spirit of power, of love and of self-discipline. - 2 Timothy 1:7 ", 
									   "This same Jesus, who has been taken from you into heaven, will come back in the same way you have seen him go into heaven. - Acts 1:11 ", 
									   "Everyone who believes in him receives forgiveness of sins through his name. - Acts 10:43 ", 
									   " Believe in the Lord Jesus, and you will be saved - you and your household. - Acts 16:31", 
									   "all the days of our lives in the temple of the LORD.",
									   "You will receive an inheritance from the Lord as a reward.- Colossians 3:24",
									   "When Christ, who is your life, appears, then you also will appear with him in glory. - Colossians 3:4 ",
									   "The Lord our God is merciful and forgiving, even though we have rebelled against him. - Daniel 9:9 ", 
									   "He is your praise; he is your God, who performed for you those great and awesome wonders you saw with your own eyes. - Deuteronomy 10:21 ", 
									   " For the Lord your God is the one who goes with you to fight for you against your enemies to give you victory. - Deuteronomy 20:4", 
									   "Be strong and courageous. Do not be afraid or terrified because of them, for the Lord your God goes with you; he will never leave you nor forsake you. -Deuteronomy 31:6",
										"The Lord himself goes before you and will be with you; he will never leave nor forsake you. Do not be afraid; do not be discouraged. - Deuteronomy 31:8 ",
										 " The eternal God is your refuge, and underneath are the everlasting arms. He will drive out your enemy before you, saying, ‘Destroy him!’- Deuteronomy 33:27",
										  "If you seek the Lord your God, you will find Him if you look for Him with all your heart and with all your soul. - Deuteronomy 4:29", 
										  "Remember the Lord your God, for it is he who gives you the ability to produce wealth. - Deuteronomy 8:18 ",
										  "Know then in your heart that as a man disciplines his son, so the Lord your God disciplines you. - Deuteronomy 8:5 ",
										  " I pray also that...you may know the hope to which he has called you, the riches of his glorious inheritance in the saints, and his incomparably great power for us who believe. - Ephesians 1:18-19 ",
										 "In him we have redemption through his blood, the forgiveness of sins, in accordance with the riches of God's grace. - Ephesians 1:7",
										  "He himself is our peace. - Ephesians 2:14",
										  "Because of his great love for us, God, who is rich in mercy, made us alive with Christ even when we were dead in transgression - it is by grace you have been saved. And God raised us up with Christ and seated us with him in the heavenly realms in Christ Jesus, in order that in the coming ages he might show the incomparable riches of his grace, expressed in his kindness to us in Christ Jesus...For we are God's workmanship, created in Christ Jesus to do good works, which God prepared in advance for us to do. - Ephesians 2:4-7,10",
										  "In Him and through faith in Him we may approach God with freedom and confidence. - Ephesians 3:12",
										  "And I pray that...together with all the saints, [you may] know the love of Christ that surpasses knowledge - that you may be filled to measure of all the fullness of God. - Ephesians 3:19-19",
										  "For you were once darkness, but now you are light in the Lord. Live as children of light. - Ephesians 5:8", 
										  "He chose us in him before the creation of the world to be holy and blameless in his sight. - Ephesians 1:4 ",
										  "Christ loved the church and gave himself up for her to make her holy, cleansing her by the washing with water through the word, and to present her to himself as a radiant church, without stain or wrinkle or any other blemish. - Ephesians 5:25-27 ",
										  " Do not be afraid. Stand firm and you will see the deliverance the Lord will bring you. - Exodus 14:13 ",
										  " In your unfailing love you will lead the people you have redeemed. In your strength you will guide them to your holy dwelling. - Exodus 15:13",
										  "Now if you obey me fully and keep my covenant, then out of all nations you will be my treasured possession. Although the whole earth is mine, you will be for me a kingdom of priests and a holy nation. - Exodus 19:5-6 ",
										  "My Presence will go with you, and I will give you rest. -  Exodus 33:14",
										  "I will drive out nations before you and enlarge your territory. - Exodus 34:24",
										  "I will send down showers in season; there will be showers of blessing. - Ezekiel 34:26 ", 
										  "'You my sheep, the sheep of my pasture, are people, and I am your God,' declares the Sovereign Lord. - Ezekiel 34:31 ",
										 " I will give you a new heart and put a new spirit in you. - Ezekiel 36:26 ",
										 "I am concerned for you and will look on you with favor. - Ezekiel 36:9 ",
										 " You are all sons of God through faith in Christ Jesus. - Galatians 3:26",
										 "I will bless those who bless you, and whoever curses you I will curse; and all peoples on earth will be blessed through you. - Genesis 12:3",
										 "The LORD appeared to Abram and said, 'To your offspring I will give this land.' - Genesis 12:7",
										 "I will establish my covenant as an everlasting covenant between me and you and your descendants after you for the generations to come, to be your God and the God of your descendants after you. - Genesis 17:7",
										 "I am with you and will watch over you wherever you go, and I will bring you back to this land. I will not leave you until I have done what I have promised. - Genesis 28:15 ",
										 "The Sovereign Lord is my strength; he makes my feet like the feet of a deer, he enables me to go on the heights. - Habakkuk 3:19",
										 "‘Be strong, all you people of the land,’ declares the Lord, ‘and work. For I am with you.’ - Haggai 2:4",
										 "You need to persevere so that when you have done the will of God, you will receive what he has promised. - Hebrews 10:36",
										"God disciplines us for our good, that we may share in his holiness. - Hebrews 12:10",
										"Never will I leave you; never will I forsake you. - Hebrews 13:5",
										"The Lord is my helper; I will not be afraid. What can man do to me? - Hebrews 13:6",
										"God...will not forget your work and the love you have shown him as you have helped his people and continue to help them. - Hebrews 6:10",
										"He is able to save completely those who come to God through him, because he always lives to intercede for them. - Hebrews 7:25",
"Christ was sacrificed once to take away the sins of many people; and he will appear a second time, not to bear sin, but to bring salvation to those who are waiting for him. - Hebrews 9:28",
 "I will ransom them from the power of the grave; I will redeem them from death.- Hosea 13:14",
"Let us acknowledge the LORD; let us press on to acknowledge him. As surely as the sun rises, he will appear; he will come to us like the winter rains, like the spring rains that water the earth. - Hosea 6:3",
"We will not all sleep, but we will all be changed...the dead will be raised imperishable, and we will be changed. -1 Corinthians 15:51-52",
"The man who plants and the man who waters have one purpose, and each will be rewarded according to his own labor. For we are God's fellow workers. - 1 Corinthians 3:8-9",
"I do not even judge myself...It is the Lord who judges me. Therefore judge nothing before the appointed time; wait till the Lord comes. He will bring to light what is hidden in darkness and will expose the motives of men's hearts. At that time each will receive his praise from God. -  1 Corinthians 4:3-5",
"God is faithful; he will not let you be tempted beyond what you can bear. But when you are tempted, he will also provide a way out so that you can stand up under it.- 1 Corinthians 10:13",
"You were washed, you were sanctified, you were justified in the name of the Lord Jesus Christ and by the Spirit of our God.- 1 Corinthians 6:11",
"If we confess our sins, he is faithful and just and will forgive us our sins and purify us from all unrighteousness. -1 John 1:9",
"Whoever acknowledges the Son has the Father also.- 1 John 2:23",
"We know that when he appears, we shall be like him, for we shall see him as he is. -  1 John 3:2",
"No one who is born of God will continue to sin, because God's seed remains in him; he cannot go on sinning, because he has been born of God. - 1 John 3:9",
"God has given us eternal life, and this life is in his Son. He who has the Son has life; he who does not have the Son of God does not have life. - 1 John 5:11-12",
"If we ask anything according to his will, he hears us. And if we know that he hears us - whatever we ask - we know that we have what we asked of him. - 1 John 5:14-15",
"We know that anyone born of God does not continue to sin; the one who was born of God keeps him safe, and the evil one does not touch him. -  1 John 5:18",
"In his great mercy he has given us new birth into a living hope through the resurrection of Jesus Christ from the dead, and into an inheritance that can never perish, spoil or fade - kept in heaven for you who through faith are shielded by God's power until the coming of the salvation that is ready to be revealed in the last time. - 1 Peter 1:3-5",
"Like newborn babies, crave pure spiritual milk, so that by it you may grow up in your salvation, now that you have tasted that the Lord is good. As you come to him, the living Stone...you also, like living stones, are being built into a spiritual house to be a holy priesthood, offering spiritual sacrifices acceptable to God through Jesus Christ. -  1 Peter 2:2-5",
"You are a chosen people, a royal priesthood, a holy nation, a people belonging to God, that you may declare the praises of him who called you out of darkness into his wonderful light. - 1 Peter 2:9",
"He must turn from evil and do good; he must seek peace and pursue it. For the eyes of the Lord are on the righteous, and his ears are attentive to their prayer.- 1 Peter 3:11-12",
"The eyes of the Lord are on the righteous and His ears are attentive to their prayer. - 1 Peter 3:12",
" 1 Peter 5:10 The God of all grace, who called you to his eternal glory in Christ, after you have suffered a little while, will himself restore you and make you strong, firm and steadfast. -  1 Peter 3:12",
"When the Chief Shepherd appears, you will receive the crown of glory that will never fade. - 1 Peter 5:4",
"It is not by sword or spear that the Lord saves; for the battle is the Lord's. -  1 Samuel 17:47",
"He raises the poor from the dust and lifts the needy from the ash heap; he seats them with princes and has them inherit a throne of honor. For the foundations of the earth are the Lord's; upon them he has set the world. He will guard the feet of his saints. -  1 Samuel 2:8-9" ,
"We do not want you to be ignorant about those who fall asleep, or to grieve like the rest of men, who have no hope. We believe that Jesus died and rose again and so we believe that God will bring with Jesus those who have fallen asleep in him. -  1 Thessalonians 4:13-14",
"It is God's will that you should be holy.¬ -  1 Thessalonians 4:3",
"The Lord is faithful, and he will strengthen and protect you from the evil one. - 1 Thessalonians 3:3",
"The Lord himself will come down from heaven, with a loud command, with the voice of the Archangel and with the trumpet call of God, and the dead in Christ will rise first. After that we who are still alive and are left will be caught up with them in the clouds to meet the Lord in the air. And so we will be with the Lord forever. -1 Thessalonians 4:16-17",
"If my people, who are called by my name, will humble themselves and pray and seek my face and turn from their wicked ways, then I will hear from heaven and will forgive their sin and will heal their land. - 2 Chronicles 7:14",
"We, who with unveiled faces all reflect the Lord's glory, are being transformed into his likeness with ever-increasing glory, which comes from the Lord, who is the Spirit. -  2 Corinthians 3:18" ,
"The one who raised the Lord Jesus from the dead will also raise us with Jesus and present us with you in his presence. -  2 Corinthians 4:14",
"God made him who had no sin to be sin for us, so that in him we might become the righteousness of God. - 2 Corinthians 5:21",
"I will be a Father to you, and you will be my sons and daughters. - 2 Corinthians 6:18",
"Now he who supplies seed to the sower and bread for food will also supply and increase your store of seed and will enlarge the harvest of your righteousness. You will be made rich in every way so that you can be generous on every occasion. -  2 Corinthians 9:10-11",
"He will deliver us. -  2 Corinthians 1:10",
"Praise be to the God...of all comfort, who comforts us in all our troubles, so that we can comfort those in any trouble with the comfort we ourselves have received from God. - 2 Corinthians 1:3-4",
"God is able to make all grace abound to you, so that in all things at all times, having all you need, you will abound in every good work. -  2 Corinthians 9:8",
"My grace is sufficient for you, for my power is made perfect in weakness. -  2 Corinthians 12:9",
"His divine power has given us everything we need for life and godliness through our knowledge of him. - 2 Peter 1:3",
"God does not take away life; instead, he devises ways so that a banished person may not remain estranged from him. -  2 Samuel 14:14",
"I call to the Lord, who is worthy of praise, and I am saved from my enemies. -  2 Samuel 22:4",
"God will pay back trouble to those who trouble you and give relief to you who are troubled. -  2 Thessalonians 1:6-7",
"Now there is in store for me the crown of righteousness, which the Lord, the righteous Judge, will award to me on that day - and not only to me, but also to all who have longed for his appearing. - 2 Timothy. 4:8",
"I know whom I have believed, and am convinced that he is able to guard what I have entrusted to him for that day. -  2 Timothy 1:12",
"if we are faithless, he will remain faithful, for he cannot disown himself. -  2 Timothy 2:13",
"'Come now, let us reason together,' says the LORD. Though your sins are like scarlet, they shall be as white as snow; though they are red as crimson, they shall be like wool. - Isaiah 1:18",
" With righteousness he will judge the needy, with justice he will give decisions for the poor of the earth. - Isaiah 11:4",
"Surely God is my salvation; I will trust, and not be afraid. The Lord, The Lord, is my strength and my song; he has become my salvation. - Isaiah 12:2",
"The Sovereign Lord will wipe away the tears from all faces. ¬- Isaiah 25:8",
"But your dead will live; their bodies will rise. You who dwell in the dust, wake up and shout for joy. - Isaiah 26:19",
"You will keep in perfect peace him whose mind is steadfast, because he trusts in you. - Isaiah 26:3",
"In repentance and rest is your salvation, in quietness and trust is your strength. - Isaiah 30:15",
"Whether you turn to the right or to the left, your ears will hear a voice behind you, saying, ‘This is the way; walk in it. - Isaiah 30:21",
"For the Lord is our judge; the Lord is our lawgiver; the Lord is our king, it is he who will save us. - Isaiah 33:22",
"He will be the sure foundation for your times, a rich store of salvation and wisdom and knowledge. - Isaiah 33:6",
"Gladness and joy will overtake them, and sorrow and sighing will flee away. - Isaiah 35:10",
"Say to those with fearful hearts, ‘Be strong, do not fear, your God will come.’ - Isaiah 35:4",
"The LORD will save me, and we will sing with stringed instruments - Isaiah 38:20",
"He tends his flock like a shepherd: He gathers the lambs in his arms and carries them close to his heart; he gently leads those that have young. - Isaiah 40:11",
"The Lord is the everlasting God, the Creator of the ends of the earth. He will not grow tired or weary, and his understanding no one can fathom. He gives strength to the weary and increases the power of the weak. - Isaiah 40:28",
"I will bind up the injured and strengthen the weak. - Isaiah 40:29 ",
"Those who hope in the Lord will renew their strength. - Isaiah 40:31",
"I will strengthen you and help you; I will uphold you with my righteous right hand. - Isaiah 41:10",
"So do not fear, for I am with you; do not be dismayed, for I am your God. - Isaiah 41:10 ",
"I am the Lord, your God, who takes hold of your right hand and says to you, Do not fear; I will help you. - Isaiah 41:13",
"I, the God of Israel, will not forsake them. - Isaiah 41:17",
"I will turn the darkness into light. - Isaiah 42:16",
"Fear not, for I have redeemed you; I have called you by name; you are mine. - Isaiah 43:1 ",
"When you pass through the waters, I will be with you. - Isaiah 43:2",
"I, even I, am he who blots out your transgressions, for my own sake, and remembers your sins no more. - Isaiah 43:25",
"I have swept away your offenses like a cloud, your sins like the morning mist. Return to me, for I have redeemed you. - Isaiah 44:22",
"I will go before you and will level the mountains - Isaiah 45:2",
"I will not forget you. - Isaiah 49:15",
"I will contend with those who contend with you, and your children I will save. - Isaiah 49:25",
"Because the Sovereign LORD helps me, I will not be disgraced. Therefore have I set my face like flint, and I know I will not be put to shame. - Isaiah 50:7",
"Everlasting joy will crown their heads. Gladness and joy will overtake them, and sorrow and sighing will flee away. - Isaiah 51:11",
"I, even I, am he who comforts you. - Isaiah 51:12",
"My salvation will last forever. - Isaiah 51:6",
"My unfailing love for you will not be shaken nor my covenant of peace be removed. - Isaiah 54:10",
"In righteousness you will be established: Tyranny will be far from you; you will have nothing to fear. Terror will be far removed; it will not come near you. - Isaiah 54:14 ",
"’No weapon forged against you will prevail, and you will refute every tongue that accuses you. This is the heritage of the servants of the LORD, and this is their vindication from me,’ declares the LORD. - Isaiah 54:17",
"With everlasting kindness I will have compassion on you. - Isaiah 54:8",
"Let the wicked forsake his way and the evil man his thoughts. Let him turn to the LORD, and he will have mercy on him, and to our God, for he will freely pardon. - Isaiah 55:7",
"I, the Lord, live in a high and holy place, but also with him who is contrite and lowly in spirit, to revive the spirit of the lowly and revive the heart of the contrite. - Isaiah 57:15",
"I have seen his ways, but I will heal him; I will guide him and restore comfort to him. - Isaiah 57:18",

"Those who walk uprightly enter into peace; they find rest as they lie in death. - Isaiah 57:2",
"The Lord will guide you always; he will satisfy your needs in a sun-scorched land and will strengthen your frame. - Isaiah 58:11",
"The LORD will guide you always; he will satisfy your needs in a sun-scorched land and will strengthen your frame. You will be like a well-watered garden, like a spring whose waters never fail. - Isaiah 58:11",
"Then you will call, and the Lord will answer; you will cry for help, and He will say, ‘Here am I’. - Isaiah 58:9 ",
"Surely, the arm of the Lord is not too short to save, nor his ear too dull to hear. - Isaiah 59:1",
"You, O Lord, are our Father, our Redeemer from of old is your name. - Isaiah 63:16",
"Before they call I will answer; while they are still speaking, I will hear. - Isaiah 65:24",
"Blessed is the man who perseveres under trial, because when he has stood the test, he will receive the crown of life that God has promised to those who love him. - James 1:12",
"Every good and perfect gift is from above, coming down from the Father...who does not change like shifting shadows. - James 1:17",
"If any of you lacks wisdom, he should ask God, who gives generously to all without finding fault, and it will be given to him. - James 1:5",
"Humble yourselves before the Lord, and he will lift you up. - James 4:10",
"Come near to God and he will come near to you. - James 4:8 ",
"Is any one of you sick? he should call the elders of the church to pray over him and anoint him with oil in the name of the Lord. And the prayer offered in faith will make the sick person well; the Lord will raise him up. - James 5:14-15",
"If you repent, I will restore you that you may serve. - Jeremiah 15:19",
"I am with you to rescue and save you. - Jeremiah 15:20",
"I the Lord search the heart and examine the mind, to reward a man according to his conduct. - Jeremiah 17:10",
"Heal me, O Lord, and I will be healed; save me and I will be saved, for you are the one I praise. - Jeremiah 17:14",
"He rescues the life of the needy from the hands of the wicked. - Jeremiah 20:13",
"I will give them a heart to know me, that I am the Lord. They will be my people, and I will be their God, for they will return to me with all their heart. - Jeremiah 24:7",
"’For I know the plans I have for your,’ declares the Lord, ‘plans to prosper you and not to harm you, plans to give you hope and a future.’ - Jeremiah 29:11 ",
"You will seek me and find me when you seek me with all your heart. - Jeremiah 29:13",
"I will discipline you, but only with justice. - Jeremiah 30:11",
"’But I will restore you to health and heal your wounds,’ declares the LORD. - Jeremiah 30:17",
"I will give them comfort and joy instead of sorrow. - Jeremiah 31:13",
 "’I will watch over them to build and to plant’, declares the Lord. - Jeremiah 31:28",
"I have loved you with an everlasting love; I have drawn you with loving-kindness. I will build you up again. - Jeremiah 31:3-4",

"I will forgive their wickedness and will remember their sins no more. - Jeremiah 31:34",
"I will lead them beside streams of water on a level path where they will not stumble. - Jeremiah 31:9",
"I will never stop doing good to them. - Jeremiah 32:40",
"Call to me and I will answer you and tell you great and unsearchable things you do not know. - Jeremiah 33:3",
"I will heal my people and will let them enjoy abundant peace and security. - Jeremiah 33:6",
"I will cleanse them from all sin they have committed against me and will forgive all their sins of rebellion against me. - Jeremiah 33:8",
"I know that my Redeemer lives, and that in the end he will stand upon the earth. And after my skin has been destroyed, yet in my flesh I will see God; I myself will see him with my own eyes - I, and not another. - Job 19:25-27",
"Even on my servants, both men and women, I will pour out my Spirit in those days. - Joel 2:29",
"The Lord will be a refuge for his people. - Joel 3:16",
"To all who received him, to those who believed in his name, he gave the right to become children of God. - John 1:12 ",
"I give them eternal life, and they shall never perish; no one can snatch them out of my hand. - John 10:28",
"Jesus said, ‘I am the resurrection and the life. He who believes in me will live, even though he dies; and whoever lives and believes in me will never die. ‘ - John 11:25-26",
"My Father will honor the one who serves me. - John 12:26  ",
"Anyone who has faith in me will do what I have been doing. He will do even greater things than these, because I am going to the Father. - John 14:12",
"I will do whatever you ask in my name, so that the Son may bring glory to the Father. - John 14:13",
"I will ask the Father, and he will give you another Counselor to be with you forever-the Spirit of Truth. - John 14:16-17",
"If anyone loves me, he will obey my teaching. My Father will love him, and we will come to him and make our home with him. - John 14:23",
"In my Father's house are many rooms; if it were not so, I would have told you. I am going there to prepare a place for you. And if I go and prepare a place for you, I will come back and take you to be with me that you also may be where I am. - John 14:2-3",
"The Holy Spirit, whom the Father will send in my name, will teach you all things and will remind you of everything I have said to you. - John 14:26",
"Peace I leave with you; my peace I give you. - John 14:27",
"If I go and prepare a place for you, I will come back and take you to be with me. - John 14:3",
"If you obey my commands, you will remain in my love, just as I have obeyed my Father's commands and remain in his love. I have told you this so that my joy may be in you, and that your joy may be complete. - John 15:10-11",
"If you remain in me, and my words remain in you, ask whatever you wish, and it will be given you. - John 15:7",
"When he, the Spirit of truth, comes, he will guide you into all truth. - John 16:13",
"You will rejoice, and no one will take away your joy. - John 16:22",
"Ask and you will receive, and your joy will be complete. - John 16:24",
"The Father himself loves you because you have loved me and have believed that I came from God. - John 16:27",
"In this world, you will have trouble. But take heart! I have overcome the world! - John 16:33",
"For God so loved the world that he gave his one and only Son, that whoever believes in him shall not perish but have eternal life. - John 3:16",
"Whoever believes in Jesus is not condemned. - John 3:18",
"Whoever believes in the Son has eternal life, but whoever rejects the Son will not see life, for God's wrath remains on him. - John 3:36",
"Whoever hears my word and believes him who sent me has eternal life and will not be condemned; he has crossed over from death to life. - John 5:24",
"The dead will hear the voice of the Son of God and those who hear will live. - John 5:25",
"I am the bread of life. He who comes to me will never go hungry, and he who believes in me will never be thirsty. - John 6:35",
"All that the Father gives me will come to me, and whoever comes to me I will never drive away. For I have come down from heaven not to do my will but to do the will of him who sent me. And this is the will of him who sent me, that I shall lose none of all that he has give me, but raise them up at the last day. - John 6:37-39",
"Everyone who looks to the Son and believes in him shall have eternal life, and I will raise him up at the last day. - John 6:40",
"He who believes has everlasting life. - John 6:47",
"Whoever believes in me, as the Scripture has said, streams of living water will flow from within him. By this he meant the Spirit, whom those who believed in him were later to receive. - John 7:38-39",
"Whoever follows me will never walk in darkness, but will have the light of life. - John 8:12",
"Everyone who sins is a slave to sin. Now a slave has no permanent place in the family, but a son belongs to it forever. So if the Son sets you free, you will be free indeed. - John 8:34-36",
"Have I not commanded you? Be strong and courageous. Do not be terrified; do not be discouraged, for the Lord your God will be with you wherever you go. - Joshua 1:9",
"You know with all your heart and soul that not one of all the good promises the Lord your God gave you has failed. Every promise has been fulfilled; not one has failed. - Joshua 23:14",
"I the LORD am holy—I who make you holy. - Leviticus 21:8",
"I will remember the covenant - Leviticus 26:45",
"Ask and it will be given to you: seek and you will find; knock and the door will be opened to you. - Luke 11:9",
"The Holy Spirit will teach you at that time what you should say. - Luke 12:12",
"Whoever acknowledges me before men, the Son of man will also acknowledge before the angels of God. - Luke 12:8",
"I will give you words and wisdom that none of your adversaries will be able to resist or contradict. - Luke 21:15",
"’They will be mine,’ says the Lord Almighty, ‘in the day when I make up my treasured possession.’ - Malachi 3:17",
"I the LORD do not change. So you, O descendants of Jacob, are not destroyed. - Malachi 3:6",
"’I tell you the truth,’ Jesus replied, ‘no one who has left home or brothers or sisters or mother or father or children or fields for me and the gospel will fail to receive a hundred times as much in this present age (homes, brothers, sisters, mothers, children and fields—and with them, persecutions) and in the age to come, eternal life. But many who are first will be last, and the last first.’ - Mark 10:29-30",
"Therefore I tell you, whatever you ask for in prayer, believe that you have received it, and it is yours. - Mark 11:24",
"The very hairs of your head are all numbered. So don't be afraid; you are worth more than many sparrows. - Matthew 10:30-31",
"Come to me, all you who are weary and burdened, and I will give you rest. - Matthew 11:28",
"Take my yoke upon you and learn from me, for I am gentle and humble in heart, and you will find rest for your souls. - Matthew 11:29",
"If two of you on earth agree about anything you ask for, it will be done for you by my Father in heaven. - Matthew 18:19",
"At the renewal of all things everyone who has left houses or brothers or sisters or father or mother or children of fields for my sake will receive a hundred times as much and will inherit eternal life. - Matthew 19:28-29",
"If you believe, you will receive whatever you ask for in prayer. - Matthew 21:22",
"Surely I will be with you always, to the very end of the age. - Matthew 28:20",
"Blessed are those who are persecuted because of righteousness, for theirs is the kingdom of heaven. - Matthew 5:10",
"Blessed are those who mourn, for they will be comforted. - Matthew 5:4",
"Blessed are the merciful, for they will be shown mercy. - Matthew 5:7",
"Blessed are the peacemakers, for they will be called sons of God. - Matthew 5:9",

"Your Father, who sees what is done in secret, will reward you. - Matthew 6:4",
"Ask and it will be given to you; seek and you will find; knock and the door will be opened to you. - Matthew 7:7",
"Everyone who asks receives; he who seeks finds; and to him who knocks, the door will be opened. - Matthew 7:8",
"Which of you, if his son asks for bread, will give him a stone? Or if he asks for a fish, will give him a snake? If you, then, though you are evil, know how to give good gifts to your children, how much more will your Father in heaven give good gifts to those who ask Him?  - Matthew 7:9-11",
"He will teach us his ways, so that we may walk in his paths. - Micah 4:2",
"Who is a God like you, who pardons sin and forgives the transgression of the remnant of his inheritance? You do not stay angry forever but delight to show mercy. You will again have compassion on us; you will tread our sins underfoot and hurl all our iniquities into the depths of the sea. - Micah 7:18-19",
"But as for me, I watch in hope for the Lord, I wait for God my Savior; my God will hear me. - Micah 7:7",
"He cares for those who trust in him. - Nahum 1:7",
"The joy of the Lord is your strength. - Nehemiah 8:10",
"The Lord is with us. - Numbers 14:9",
"The Lord bless you and keep you; the Lord make his face to shine upon you and be gracious to you; the Lord turn his face toward you and give you peace. - Numbers 6:24-26",
"The Lord Jesus Christ, who, by the power that enables him to bring everything under his control, will transform our lowly bodies so that they will be like his glorious body.- Phil. 3:21",
"He who began a good work in you will carry it on to completion until the day of Christ Jesus. - Philippians 1:6",
"God will meet all your needs according to his glorious riches in Christ Jesus. - Philippians 4:19",
"Do not be anxious about anything, but in everything, by prayer and petition, with thanksgiving, present your requests to God. And the peace of God, which transcends all understanding, will guard your hearts and your minds in Christ Jesus. - Philippians 4:6-7",
"Whatever you have learned or received or heard from me, or seen in me - put it into practice. And the God of peace will be with you. - Philippians 4:9",
"The Lord is far from the wicked but He hears the prayer of the righteous. - Proverbs 15:29 ",
"Commit to the Lord whatever you do, and your plans will succeed. - Proverbs 16:3",
"In his heart a man plans his course, but the Lord determines his steps. - Proverbs 16:9 ",
"He who is kind to the poor lends to the Lord, and he will reward him for what he has done. - Proverbs 19:17 ",
"The Lord gives wisdom, and from his mouth come knowledge and understanding. - Proverbs 2:6",
"Trust in the Lord with all your heart and lean not on your own understanding; in all your ways acknowledge him, and he will make your paths straight. - Proverbs 3:5-6",
"But you, O God, do see trouble and grief; you consider it to take it in hand. The victim commits himself to you; you are the helper of the fatherless. - Psalm 10:14",
"The Lord is good and his love endures forever; his faithfulness continues through all generations. - Psalm 100:5",
"As far as the east is from the west, so far has he removed our transgressions from us. As a father has compassion on his children, so the Lord has compassion on those who fear him; for he knows how we are formed, he remembers that we are dust. - Psalm 103:12-14",
"From everlasting to everlasting the Lord's love is with those who fear him. - Psalm 103:17",
"He forgives all my sins and heals all my diseases. - Psalm 103:3",
"The Lord works righteousness and justice for all the oppressed. - Psalm 103:6",
"He satisfies the thirsty and fills the hungry with good things.- Psalm 107:9",
"He provides food for those who fear him. - Psalm 111:5",
"Good will come to him who is generous and lends freely. - Psalm 112:5",
"The Lord remembers us and will bless us. - Psalm 115:12",
"He will bless those who fear the Lord, who walk in his ways. - Psalm 115:13",
"Precious in the sight of the Lord is the death of his saints.- Psalm 116:15",
"The Lord protects the simplehearted. - Psalm 116:6",
"Great peace have they who love your law, and nothing can make them stumble. - Psalm 119:165",
"Your promise renews my life. - Psalm 119:50",
"Lord, you will keep us safe and protect us...forever.- Psalm 12:7",

"My help comes from the Lord, the Maker of heaven and earth. He will not let your foot slip - he who watches over you will not slumber. - Psalm 121:2-3",
"Those who sow in tears will reap with songs of joy. He who goes out weeping, carrying seed to sow, will return with songs of joy, carrying sheaves with him. - Psalm 126:5-6",
"If you, O Lord, kept a record of sins, O Lord, who could stand? But with you there is forgiveness. - Psalm 130:3-4",
"With the Lord is unfailing love and with him is full redemption. - Psalm 130:7",
"Though I walk in the midst of trouble, you preserve my life; you stretch out your hand against the anger of my foes, with your right hand you save me. - Psalm 138:7",
"The Lord will fulfill his purpose for me. - Psalm 138:8",
"When my spirit grows faint within me, it is you who knows my way. - Psalm 142:3",
"The LORD upholds all those who fall and lifts up all who are bowed down. - Psalm 145:14",
"The Lord is near to all who call on him, to all who call on him in truth. - Psalm 145:18",
"He fulfills the desires of those who fear him. - Psalm 145:19",
"The Lord sustains the humble but casts the wicked to the ground. - Psalm 147:6",
"You have made known to me the path of life; you will fill me with joy in your presence, with eternal pleasures at your right hand. - Psalm 16:11",
"When I awake, I will be satisfied with seeing your likeness. - Psalm 17:15",
"You save the humble but bring low those whose eyes are haughty. - Psalm 18:27-28",
"As for God, his way is perfect; the word of the Lord is flawless. He is a shield for all who take refuge in him. - Psalm 18:30",
"The Lord is my shepherd, I shall lack nothing. - Psalm 23:1",
"He makes me lie down in green pastures, he leads me beside quiet waters - Psalm 23:2",
"he restores my soul. He guides me in paths of righteousness for his name’s sake. - Psalm 23:3",
"Even though I walk through the valley of the shadow of death, I will fear no evil, for you are with me; your rod and your staff, they comfort me. - Psalm 23:4",
"You anoint my head with oil; my cup overflows. - Psalm 23:5",
"You prepare a table before me in the presence of my enemies. - Psalm 23:5",

"Surely goodness and love will follow me all the days of my life, and I will dwell in the house of the LORD forever. - Psalm 23:6",
"He guides the humble in what is right and teaches them his way. - Psalm 25:9",
"Though my father and mother forsake me, the Lord will receive me. - Psalm 27:10",
"in the day of trouble he will keep me safe in his dwelling; he will hide me in the shelter of his tabernacle and set me high upon a rock. - Psalm 27:5",
"The Lord is my strength and my shield; my heart trusts in him. - Psalm 28:7",
"The Lord gives strength to his people; the Lord blesses his people with peace. - Psalm 29:11",
"You are a shield around me, O Lord, my Glorious One, who lifts up my head. - Psalm 3:3",
"Weeping may remain for a night, but rejoicing comes in the morning. - Psalm 30:5",
"How great is your goodness, which you have stored up for those who fear you, which you bestow in the sight of men on those who take refuge in you. - Psalm 31:19",
"The Lord preserves the faithful. - Psalm 31:23",
"Many are the woes of the wicked, but the Lord's unfailing love surrounds the man who trusts in him. - Psalm 32:10",
"I acknowledged my sin to you and did not cover up my iniquity. I said, ‘I will confess my transgressions to the Lord’ - and you forgave the guilt of my sin. - Psalm 32:5-6",
"I will instruct you and teach you in the way you should go. - Psalm 32:8",
"But the eyes of the Lord are on those who fear him, on those whose hope is in his unfailing love. - Psalm 33:18",
"The righteous cry out and the Lord hears them. - Psalm 34:17",
"A righteous man may have many troubles, but the Lord delivers him from them all. - Psalm 34:19",
"The Lord redeems his servants; no one who takes refuge in him will be condemned. - Psalm 34:22",
"A little while, and the wicked will be no more; though you look for them, they will not be found. But the meek will inherit the land and enjoy great peace. - Psalm 37:10-11",
"For the Lord loves the just and will not forsake his faithful one. They will be protected forever. - Psalm 37:28",
"Wait for the Lord and keep His way. He will exalt you to possess the land. - Psalm 37:34",
"The Lord helps them and delivers them; he delivers them from the wicked and saves them, because they take refuge in him. - Psalm 37:40",
"Know that the Lord has set apart the godly for himself; the Lord will hear when I call to him. - Psalm 4:3",
"I will lie down and sleep in peace, for you alone, O Lord, make me dwell in safety. - Psalm 4:8",
"Blessed is he who has regard for the weak; the Lord delivers him in his times of trouble. - Psalm 41:1",
"The Lord will sustain him on his sickbed. - Psalm 41:3",
"God is our refuge and strength, an ever present help in trouble. - Psalm 46:1",
"The Lord Almighty is with us; the God of Jacob is our fortress. - Psalm 46:7",
"For this God is our God for ever and ever; he will be our guide even to the end. - Psalm 48:14",
"For surely, O LORD, you bless the righteous; you surround them with your favor as with a shield - Psalm 5:12",
"Call upon me in the day of trouble; I will deliver you, and you will honor me. - Psalm 50:15",
"Surely God is my help; the Lord is the one who sustains me. - Psalm 54:4",
"He ransoms me unharmed from the battle waged against me, even though many oppose me. - Psalm 55:18",
"Cast your cares on the Lord and he will sustain you. - Psalm 55:22",
"God sends his love and faithfulness. - Psalm 57:3",
"I stay close to you; your right hand upholds me. - Psalm 63:8",
"O you who hear prayer, to you all men will come...You answer us with awesome deeds of righteousness, O God our Savior. - Psalm 65:2,5",
"God will bless us, and all the ends of the earth will fear him. - Psalm 67:7",
"Praise be to the Lord, to God our Savior, who daily bears our burdens. - Psalm 68:19",
"A father to the fatherless, a defender of widows, is God in his holy dwelling. - Psalm 68:5",
"In the day of my trouble I will call to you, for you will answer me. - Psalm 68:7",
"He will take pity on the weak and the needy and save the needy from death. - Psalm 72:13",
"I am always with you; you hold me by my right hand. - Psalm 73:23",
"You guide me with your counsel, and afterward you will take me into glory. – Psalm 73:24 ",
"Whom have I in heaven but you? And being with you, I desire nothing on earth. My flesh and my heart may fail, but God is the strength of my heart and my portion forever. - Psalm 73:25-26",
"For the Lord God is a sun and shield; the Lord bestows favor and honor; no good thing does he withhold from those whose walk is blameless. - Psalm 84:11",
"The Lord will indeed give what is good. - Psalm 85:12",
"You forgave the iniquity of your people and covered all their sins. - Psalm 85:2",
"He promises peace to his people, his saints. - Psalm 85:8",
"You are kind and forgiving, O Lord, abounding in love to all who call to you. - Psalm 86:5",
"My hand will sustain him; surely my arm will strengthen him. - Psalm 89:21",
"I will not take my love from him, nor will I ever betray my faithfulness. - Psalm 89:33",
"For he will command his angels concerning you to guard you in all your ways; - Psalm 91:11",
"’Because he loves me,’ says the Lord, ‘I will rescue him; I will protect him for he acknowledges my name.’ - Psalm 91:14",
"He will cover you with his feathers, and under his wings you will find refuge; his faithfulness will be your shield and rampart. - Psalm 91:4",
"If you make the Most High your dwelling - even the Lord, who is my refuge – then no harm will befall you, no disaster will come near. - Psalm 91:9-10",
"Blessed is the man you discipline, O Lord, the man you teach from your law; you grant him relief from the days of trouble, till a pit is dug for the wicked. For the Lord will not reject his people; he will never forsake his inheritance. - Psalm 94:12-14",
"Light is shed upon the righteous and joy on the upright in heart. - Psalm 97:11",
"He will not allow your foot to be moved; He who keeps you will not slumber. - Psalms 121:3",
"The Lord is nigh unto all them that call upon Him, to all that call upon Him in truth. - Psalms 145:18",
"As for me, I will call upon God; and the Lord shall save me. Evening and morning, and at noon, will I pray, and cry aloud: and He shall hear my voice. - Psalms 55:16-17",
"Cast thy burden upon the Lord, and He shall sustain thee: He shall never suffer the righteous to be moved. - Psalms 55:22",
"Bow down Your ear, O Lord, hear me; For I am poor and needy. Be merciful to me, O Lord, for I cry to You all day long. Rejoice the soul of Your servant, for to You, O Lord, I lift up my soul. For You, Lord, and good, and ready to forgive, and abundant in mercy to all those who call upon You. - Psalms 86:1,3,4,5",
"Jesus has made us to be a kingdom and priests to serve his God and Father. - Revelation 1:6",
"The suffering and kingdom and patient endurance...are ours in Jesus. - Revelation 1:9",
"God himself will be with them and be their God. He will wipe every tear from their eyes. There will be no more death or mourning or crying or pain, for the old order of things has passed away. - Revelation 21:3-4",
"As the Scripture says, ‘Everyone who trusts in him will never be put to shame. For there is no difference between Jew and Gentile - the same Lord is Lord of all and richly blesses all who call on him, for ‘Everyone who calls on the name of the Lord will be saved.’ - Romans 10:11-13 ",
"The God of peace will soon crush Satan under your feet. The grace of our Lord Jesus be with you. - Romans 16:20",
"To those who by persistence in doing good seek glory, honor and immortality, he will give eternal life. - Romans 2:7",
"To the man who does not work but trusts God who justifies the wicked, his faith is credited as righteousness. - Romans 4:5",
"Since we have been justified through faith, we have peace with God through our Lord Jesus Christ, through whom we have gained access by faith into this grace in which we now stand. - Romans 5:1-2",
"When you were slaves to sin, you were free from the control of righteousness...But now that you have been set free from sin and have become slaves to God, the benefit you reap leads to holiness, and the result is eternal life. - Romans 6:20,22",
"If we have been united with him in his death, we will certainly also be united with him in his resurrection. - Romans 6:5 ", 
"Therefore, there is now no condemnation for those who are in Christ Jesus - Romans 8:1",
"If the Spirit of him who raised Jesus from the dead is living in you, he who raised Christ from the dead will also give life to your mortal bodies through his Spirit, who lives in you. - Romans 8:11",
"For you did not receive a spirit that makes you a slave again to fear, but you received the Spirit of sonship - Romans 8:15",
"The Spirit helps us in our weakness. We do not know what we ought to pray, but the Spirit himself intercedes for us with groans that words cannot express. And he who searches our hearts knows the mind of the Spirit, because the Spirit intercedes for the saints in accordance with God's will. - Romans 8:26-27",
" In all things God works for the good of those who love him, who have been called according to his purpose. - Romans 8:28",
"He who did not spare his own Son, but gave him up for us all-how will he not also, along with him, graciously give us all things? - Romans 8:32",
"Neither death nor life, neither angels nor demons, neither the present nor the future, nor any powers, neither height nor depth, nor anything else in all creation, will be able to separate us from the love of God that is in Christ Jesus our Lord. - Romans 8:38-39",
"It does not, therefore, depend on man's desire or effort, but on God's mercy. - Romans 9:16",
"They will call on my name and I will answer them; I will say, ‘ They are my people’ and they will say ‘The Lord is our God’ - Zechariah 13:9" ,
"’Shout and be glad, O Daughter of Zion. For I am coming, and I will live among you, ' declares the LORD. - Zechariah 2:10",
"So will I save you, and you will be a blessing. - Zechariah 8:13",
"He will take great delight in you, he will quiet you with his love, he will rejoice over you with singing. - Zephaniah 3:17"];
									
									document.getElementById("thought").innerHTML = titles[day-1];
									document.getElementById("date").innerHTML = now.getDate();
									document.getElementById("month").innerHTML = now.getMonth()+1;
									document.getElementById("year").innerHTML = now.getFullYear();
									var n = now.getDay();
									var daysList = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ];
									document.getElementById("day-id").innerHTML = daysList[n];
									
								</script>
							</div>
							<div class="sidebar col-md-3 col-md-offset-1">
								<div class="widget">
									<h3 class="widget-title">Time</h3>
									
									<canvas id="canvas" width="250" height="250"
										style="background-color:#fff">
									</canvas>
								</div>
								<script type="text/javascript">
									var canvas = document.getElementById("canvas");
									var ctx = canvas.getContext("2d");
									var radius = canvas.height / 2;
									ctx.translate(radius, radius);
									radius = radius * 0.90
									setInterval(drawClock, 1000);

									function drawClock() {
									  drawFace(ctx, radius);
									  drawNumbers(ctx, radius);
									  drawTime(ctx, radius);
									}

									function drawFace(ctx, radius) {
									  var grad;
									  ctx.beginPath();
									  ctx.arc(0, 0, radius, 0, 2*Math.PI);
									  ctx.fillStyle = 'white';
									  ctx.fill();
									  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
									  grad.addColorStop(0, '#333');
									  grad.addColorStop(0.5, 'white');
									  grad.addColorStop(1, '#333');
									  ctx.strokeStyle = grad;
									  ctx.lineWidth = radius*0.1;
									  ctx.stroke();
									  ctx.beginPath();
									  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
									  ctx.fillStyle = '#333';
									  ctx.fill();
									}

									function drawNumbers(ctx, radius) {
									  var ang;
									  var num;
									  ctx.font = radius*0.15 + "px arial";
									  ctx.textBaseline="middle";
									  ctx.textAlign="center";
									  for(num = 1; num < 13; num++){
									    ang = num * Math.PI / 6;
									    ctx.rotate(ang);
									    ctx.translate(0, -radius*0.85);
									    ctx.rotate(-ang);
									    ctx.fillText(num.toString(), 0, 0);
									    ctx.rotate(ang);
									    ctx.translate(0, radius*0.85);
									    ctx.rotate(-ang);
									  }
									}

									function drawTime(ctx, radius){
									    var now = new Date();
									    var hour = now.getHours();
									    var minute = now.getMinutes();
									    var second = now.getSeconds();
									    //hour
									    hour=hour%12;
									    hour=(hour*Math.PI/6)+
									    (minute*Math.PI/(6*60))+
									    (second*Math.PI/(360*60));
									    drawHand(ctx, hour, radius*0.5, radius*0.07);
									    //minute
									    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
									    drawHand(ctx, minute, radius*0.8, radius*0.07);
									    // second
									    second=(second*Math.PI/30);
									    drawHand(ctx, second, radius*0.9, radius*0.02);
									}

									function drawHand(ctx, pos, length, width) {
									    ctx.beginPath();
									    ctx.lineWidth = width;
									    ctx.lineCap = "round";
									    ctx.moveTo(0,0);
									    ctx.rotate(pos);
									    ctx.lineTo(0, -length);
									    ctx.stroke();
									    ctx.rotate(-pos);
									}
								</script>
								<div class="widget">
									<h3 class="widget-title">Magazines</h3>
									<p>Click below to download the magazines.</p>
									<a href="#" class="button" target="_blank">Download</a>
								</div>

								
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

<?php
	include_once 'footer.php';
?>