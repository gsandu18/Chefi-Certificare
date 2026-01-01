<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHEFDASH - Management Total</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --sidebar-bg: #0c0c0c;
            --main-bg: #f8f9fa;
            --accent: #b48e5c;
            --white: #ffffff;
            --text-dark: #1a1a1a;
            --text-muted: #6c757d;
            --border: #eef0f2;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            height: 100vh;
            background-color: var(--main-bg);
        }

        /* SIDEBAR */
        .sidebar {
            width: 280px;
            background-color: var(--sidebar-bg);
            color: white;
            display: flex;
            flex-direction: column;
            padding: 40px 0;
            flex-shrink: 0;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            color: var(--accent);
            padding: 0 30px;
            margin-bottom: 50px;
            letter-spacing: 2px;
        }

        .nav-item {
            padding: 15px 30px;
            color: #bdc3c7;
            text-decoration: none;
            cursor: pointer;
            transition: 0.3s;
            font-size: 15px;
            display: block;
        }

        .nav-item:hover, .nav-item.active {
            color: var(--white);
            background-color: rgba(180, 142, 92, 0.2);
            border-left: 4px solid var(--accent);
        }

        .nav-label {
            padding: 20px 30px 10px;
            font-size: 11px;
            text-transform: uppercase;
            color: #555;
            letter-spacing: 1px;
        }

        /* MAIN CONTENT */
        .main-content {
            flex-grow: 1;
            padding: 40px 60px;
            overflow-y: auto;
        }

        .page { display: none; animation: fadeIn 0.3s; }
        .page.active { display: block; }

        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

        h1 { font-family: 'Playfair Display', serif; font-size: 32px; margin-bottom: 10px; }
        .subtitle { color: var(--text-muted); margin-bottom: 30px; font-size: 14px; }

        /* CARDS & KPI */
        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .card {
            background: var(--white);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            margin-bottom: 25px;
        }

        .card-label { font-size: 11px; text-transform: uppercase; color: var(--text-muted); margin-bottom: 8px; }
        .card-value { font-size: 24px; font-weight: 600; color: var(--text-dark); }
        .trend { font-size: 12px; color: #27ae60; margin-top: 5px; }

        /* FORMS */
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-size: 13px; font-weight: 600; margin-bottom: 8px; color: var(--text-dark); }
        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border);
            border-radius: 8px;
            box-sizing: border-box;
        }

        .btn {
            background: var(--accent);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.2s;
        }

        .btn:hover { background: #96754a; }

        /* MENU LIST */
        .menu-preview { border-top: 1px solid #eee; margin-top: 20px; }
        .menu-item-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #fafafa;
        }

        /* GALLERY */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }
        .photo-box {
            height: 180px;
            background: #eee;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #ddd;
        }
        .photo-box img { width: 100%; height: 100%; object-fit: cover; }

    </style>
</head>
<body>

    <div class="sidebar">
        <div class="logo">CHEFDASH</div>
        <a class="nav-item active" onclick="switchTab('general')">Panou General</a>
        <a class="nav-item" onclick="switchTab('profil')">Date Profil</a>
        <a class="nav-item" onclick="switchTab('meniuri')">Creare Meniuri</a>
        <a class="nav-item" onclick="switchTab('comenzi')">Comenzile Mele</a>
        
        <div class="nav-label">Portofoliu</div>
        <a class="nav-item" onclick="switchTab('galerie')">Galerie Foto</a>
        <a class="nav-item" onclick="switchTab('certificari')">Certificări Excelență</a>
    </div>

    <div class="main-content">

        <section id="general" class="page active">
            <h1>Panou General</h1>
            <p class="subtitle">Statistici în timp real pentru profilul tău de Chef.</p>
            
            <div class="kpi-grid">
                <div class="card">
                    <div class="card-label">Vizite Profil</div>
                    <div class="card-value" id="kpi-visits">1,240</div>
                    <div class="trend">↑ 20% interes nou</div>
                </div>
                <div class="card">
                    <div class="card-label">Venit Estimat</div>
                    <div class="card-value">10.800 RON</div>
                    <div class="trend">↑ 8% vs luna trecută</div>
                </div>
                <div class="card">
                    <div class="card-label">Rezervări Noi</div>
                    <div class="card-value">24</div>
                    <div class="trend">Active ianuarie</div>
                </div>
                <div class="card">
                    <div class="card-label">Rating</div>
                    <div class="card-value">4.98 ★</div>
                    <div style="font-size: 11px; color:#6c757d">150 recenzii</div>
                </div>
            </div>

            <div class="card">
                <h3>Ultima activitate</h3>
                <p style="color:#6c757d; font-size: 14px;">Mihai Georgescu a vizualizat meniul tău "Inovație" acum 5 minute.</p>
            </div>
        </section>

        <section id="profil" class="page">
            <h1>Date Profil</h1>
            <div class="card">
                <div class="form-row">
                    <div class="form-group">
                        <label>Nume Complet</label>
                        <input type="text" id="chef-name" placeholder="Ex: Adrian Ionescu">
                    </div>
                    <div class="form-group">
                        <label>Specializare</label>
                        <input type="text" placeholder="Ex: Master Chef Fine Dining">
                    </div>
                </div>
                <div class="form-group">
                    <label>Descriere Experiență</label>
                    <textarea rows="4" placeholder="Povestește despre stilul tău culinar..."></textarea>
                </div>
                <button class="btn" onclick="alert('Profil salvat cu succes!')">Actualizează Date</button>
            </div>
        </section>

        <section id="meniuri" class="page">
            <h1>Creare Meniuri Evenimente</h1>
            <div class="card">
                <div class="form-row">
                    <div class="form-group">
                        <label>Nume Preparat</label>
                        <input type="text" id="dish-name" placeholder="Ex: Filet Mignon cu trufe">
                    </div>
                    <div class="form-group">
                        <label>Preț (RON)</label>
                        <input type="number" id="dish-price" placeholder="Ex: 150">
                    </div>
                </div>
                <button class="btn" onclick="addItem()">Adaugă în listă</button>

                <div class="menu-preview" id="menu-list">
                    <h3>Lista Meniu</h3>
                    </div>
            </div>
        </section>

        <section id="galerie" class="page">
            <h1>Galerie Preparate</h1>
            <div class="card">
                <label>Încarcă poze noi pentru portofoliu</label>
                <input type="file" accept="image/*" onchange="previewImage(event)" style="margin-top: 10px;">
            </div>
            <div class="gallery-grid" id="photo-gallery">
                </div>
        </section>

        <section id="certificari" class="page">
            <h1>Certificat de Excelență</h1>
            <div class="card">
                <p>Încarcă documentele care atestă certificarea ta (ISO, Michelin, WACS etc.)</p>
                <input type="file" id="cert-file">
                <button class="btn" style="margin-top: 15px;" onclick="alert('Certificat încărcat pentru verificare!')">Trimite spre validare</button>
            </div>
        </section>

    </div>

    <script>
        // Funcția de navigare
        function switchTab(id) {
            document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.nav-item').forEach(n => n.classList.remove('active'));
            
            document.getElementById(id).classList.add('active');
            event.currentTarget.classList.add('active');
        }

        // Funcția de adăugare în meniu
        function addItem() {
            const name = document.getElementById('dish-name').value;
            const price = document.getElementById('dish-price').value;

            if(name && price) {
                const row = document.createElement('div');
                row.className = 'menu-item-row';
                row.innerHTML = `<span>${name}</span> <strong>${price} RON</strong>`;
                document.getElementById('menu-list').appendChild(row);
                
                document.getElementById('dish-name').value = '';
                document.getElementById('dish-price').value = '';
            }
        }

        // Funcția de încărcare imagini
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('photo-gallery');
                const box = document.createElement('div');
                box.className = 'photo-box';
                box.innerHTML = `<img src="${reader.result}">`;
                output.appendChild(box);
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</body>
</html>
