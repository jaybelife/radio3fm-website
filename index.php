<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Radio3FM - Das beste von Heute!">
    <meta content="#177d28" name="theme-color">
    <meta property="twitter:image" content="https://radio3fm.de/logo.png" />
    <link rel="shortcut icon" href="https://radio3fm.de/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">

    <!-- Title -->
    <title>Hör Radio3FM - Das beste von Heute!</title>

    <!-- Javascript -->
	<script type="text/javascript" src="//api.laut.fm/js_tools/lautfm_js_tools.0.10.0.js.min.js" ></script>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <div class="hfm-plyr">
            <div class="stn-lg-ply-wrpr">
                <div class="ply-btn"></div>
                <div class="pse-btn"></div>
                <img src="https://radio3fm.de/logo.png" class="stn-lg" draggable="false" />
            </div>
            <div class="stn-dtl">
                <b style="font-size: 25px;">Radio3FM</b>
				<div id="api_lfm_current_song1">Das beste von Heute!</div>
<script type="text/html" id="current_song_template1" charset="utf-8">
<%= "<b>On Air: </b>" + this.artist.name + " - " + this.title %>
</script> 
<script type="text/javascript" charset="utf-8"> laut.fm.station('radio3fm') 
.current_song({container:'api_lfm_current_song1', template:'current_song_template1'}, true);
</script>

            </div>
            <audio class="hfm-lva" src="" preload="none">
                Your browser does not support HTML5 audio.
            </audio>
        </div>

        <div class="news" align="center">
            <h3>
                <a class="link" id="1" href="startseite" draggable="false">Startseite</a>
                ·
                <a class="link" id="2" href="neue-musik" draggable="false">Neu hinzugefügt</a>
                ·
                <a class="link" id="3" href="neuigkeiten" draggable="false">Neuigkeiten</a>
            </h3>
        </div>

        <div class="news-content">
            <div id="content-1">
                <h1 style="border-bottom: solid 2px #fff000">Willkommen bei <i class="fa-solid fa-rocket" style="color: #fff000;"></i> Radio3FM</h1>
                <p>Wir sind ein Radiosender, der eine breite Palette an Musikrichtungen anbietet, darunter
                    Pop, Rock, Hip-Hop, und vieles mehr. Wir bieten dir Unterhaltung und verschiedene
                    Shows an.</p>
                <p>Wir wollen unseren Hörern eine herausragende Unterhaltung und ein großartiges Musikerlebnis
                    bieten.</p>
                <p>Vielen Dank, dass Sie Radio3FM gewählt haben!</p>
            </div>
            <div id="content-2" style="display:none;">
                <h1 style="border-bottom: solid 2px #fff000">Neu in der Playlist</h1>
                <table>
                    <tbody>
                        <tr>
                            <td class="cover"><img
                                    src="https://radio3fm.de/logo.png"
                                    class="cover"></td>
                            <td><strong>Radio3FM Playlist</strong><br><sup>Radio3FM Redaktion</sup></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="content-3" style="display:none;">
                <h1 style="border-bottom: solid 2px #fff000">Neuigkeiten</h1>
                <p>
					<b>12.05.2024 - 22:13 Uhr</b>
					<br>
					Endlich auf LAUT.FM! 🎉📻
					|
					<b>🔴 WE ARE BACK ON AIR</b>
				</p>
				<hr>
                <p>
					<b>12.05.2024 - 22:12 Uhr</b>
					<br>
					Wir sind auf Instagram 📸📱 @radio3fm.de
				</p>
				<hr>
                <p>
					<b>15.04.2024- 09:47 Uhr</b>
					<br>
					Derzeit keine Verbindung zum Server möglich.
					|
					<b>⚫ OFFLINE</b>
				</p>
				<hr>
                <p>
					<b>10.03.2024- 17:24 Uhr</b>
					<br>
					Wir sind dann mal Live für euch - Wie Geil ist das denn
					|
					<b>🔴 LIVE ON AIR</b>
				</p>
				<hr>
                <p>
					<b>08.03.2024- 13:21 Uhr</b>
					<br>
					Radio3FM ist nach 5 jahren Pause wieder Online! Yippi 🥳🥂
				</p>
            </div>
            <div id="content-4" style="display:none;">
                <h1 style="border-bottom: solid 2px #fff000">Impressum</h1>
                <p>Radio3FM ist ein Angebot von .jaybelife Network<br>Inhaber: Julian Gebauer</p>
            
                <h2>Adresse:</h2>
                <p>Marie-Curie-Platz 4<br>88046 Friedrichshafen</p>
            
                <h2>Kontakt:</h2>
                <p>E-Mail: hello@jaybelife.de
					<br>
					Telefon: 0152 05405281
                </p>
				
				<h2>Design und Realisierung:</h2>
				<p>Made with <i class="fa-regular fa-heart" style="color: #ffff00;"></i> by .jaybelife</p>
				
                <h1 style="border-bottom: solid 2px #fff000">Datenschutz</h1>
                <p>Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>
            
                <p>Im Folgenden möchten wir Sie darüber informieren, welche Arten von personenbezogenen Daten wir erheben und zu welchem Zweck sie verwendet werden:</p>
            
                <ul>
                    <li>Wir erheben personenbezogene Daten wie Name, E-Mail-Adresse und IP-Adresse, die Sie uns freiwillig zur Verfügung stellen, um mit uns zu interagieren, beispielsweise wenn Sie sich für unseren Newsletter anmelden oder uns über das Kontaktformular kontaktieren.</li>
                    <li>Die von Ihnen bereitgestellten personenbezogenen Daten verwenden wir ausschließlich für den angegebenen Zweck und geben sie nicht ohne Ihre Zustimmung an Dritte weiter, es sei denn, dies ist gesetzlich vorgeschrieben oder zur Durchführung unserer Dienstleistungen erforderlich.</li>
                    <li>Wir erfassen Statistiken über den Stream, um die Leistung und Qualität unseres Dienstes zu verbessern. Diese Statistiken enthalten keine personenbezogenen Daten und werden anonymisiert erhoben.</li>
                    <li>Wir verwenden Cookies und ähnliche Tracking-Technologien, um die Nutzung unserer Website zu analysieren und personalisierte Inhalte bereitzustellen. Sie können die Verwendung von Cookies in Ihren Browsereinstellungen steuern und ablehnen.</li>
                    <li>Ihre Rechte in Bezug auf Ihre personenbezogenen Daten umfassen das Recht auf Zugang, Berichtigung, Löschung und Einschränkung der Verarbeitung. Bitte kontaktieren Sie uns, wenn Sie von einem dieser Rechte Gebrauch machen möchten.</li>
                    <li>Wir speichern Ihre personenbezogenen Daten nur so lange, wie es für die Bereitstellung unserer Dienste erforderlich ist oder wie es gesetzlich vorgeschrieben ist.</li>
                    <li>Wir behalten uns das Recht vor, diese Datenschutzerklärung jederzeit zu aktualisieren. Änderungen werden auf dieser Website veröffentlicht.</li>
                </ul>
            </div>

            <div id="content-5" style="display:none;">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $to_email = 'studio@radio3fm.de';
                        $from_email = $_POST['email'];
                        $subject = 'Neue Nachricht von ' . $_POST['name'];
                        $message = $_POST['message'];

                        $email_body = "Name: " . $_POST['name'] . "\n";
                        $email_body .= "E-Mail: " . $_POST['email'] . "\n";
                        $email_body .= "Nachricht: \n" . $_POST['message'] . "\n";
						$email_body .= "Gesendet durch das Kontaktformular von Radio3FM (www.radio3fm.de) \n";

                        $headers = "From: $from_email";

                        if (mail($to_email, $subject, $email_body, $headers)) {
                            echo '<p>Ihre Nachricht wurde erfolgreich gesendet. Vielen Dank!</p>';
                        } else {
                            echo '<p>Beim Senden Ihrer Nachricht ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.</p>';
                    }
                }?>

                <div id="content-5" align="center">
                    <h1 style="text-align: left; border-bottom: solid 2px #fff000">Deine Nachricht direkt ins Studio</h1>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>" style="min-width: 100">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required><br><br>
                        <label for="email">E-Mail:</label>
                        <input type="email" id="email" name="email" required><br><br>
                        <label for="message">Nachricht:</label>
                        <textarea id="message" name="message" rows="4" required></textarea><br><br>
                        <input type="submit" value="Nachricht senden">
                    </form>
                </div>

            </div>
            
            <div id="content-6" style="display:none;">
                <h1 style="border-bottom: solid 2px #fff000">Die Radio3FM Spotify-Playlist</h1>
				<iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/1hlD8CRVFQ96AbkMi6mu3t?utm_source=generator&theme=1" width="100%" height="750px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </div>

        <footer class="footer">
            <div class="footer-column">
                <ul>
					<li><strong style="border-bottom: solid 2px #fff000">Wer wir sind</strong></li>
                    <li>Wir sind ein Radiosender, der eine breite Palette an Musikrichtungen anbietet</li>
                </ul>
            </div>
            <div class="footer-column">
                <ul>
					<li><strong style="border-bottom: solid 2px #fff000">Seiten</strong></li>
                    <li>· <a class="link" id="6" href="spotify" draggable="false">Spotify-Playlist</a></li>
                    <li>· <a class="link" id="2" href="neue-musik" draggable="false">Neue Musik</a></li>
                    <li>· <a class="link" id="3" href="neuigkeiten" draggable="false">Neuigkeiten</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <ul>
					<li><strong style="border-bottom: solid 2px #fff000">Rechtliches</strong></li>
                    <li>· <a class="link" id="4" href="rechtliches" draggable="false">Impressum und Datenschutz</a></li>
                    <li>· <a class="link" id="5" href="studio-mail" draggable="false">Kontakt</a></li>
                </ul>
            </div>
        </footer>
        <div align="center" style="color: #177d28">
            <br>
            2021-<script>document.write(new Date().getFullYear());</script> &copy; All Rights Reserved <br /> www.radio3fm.de
            <br>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function () {
            $(".link").click(function (e) {
                e.preventDefault();
                var id = $(this).attr("id");
                $(".news-content > div").hide();
                $("#content-" + id).show();
            });
        });
    </script>
</body>

</html>
