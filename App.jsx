import React from 'react';
import "bootstrap/dist/css/bootstrap.min.css";

function App() {
  return (
    <div className="container">
      <header className="header" style={{
          backgroundImage: `url(${backgroundImage1})`,
          backgroundSize: 'cover',
          //backgroundPosition: 'center',
          display: 'flex',
          //justifyContent: 'center',
          //alignItems: 'center',
          color: '#fff'
        }}>
        <div className="logo">
          <pre><nav>
          <img src="/logo.png" alt="Harmoni Logo" height={40} width={70} /><a href="#">                                         Home         </a><a href="#">     About     </a><a href="#">      Events      </a><a href="#">      Gallery      </a><a href="#">     Contact                        </a><button className="signin">     Sign In     </button></nav>
        </pre>
        </div>
      </header>

      <main className="main">
        <section className="hero" style={{
          backgroundImage: `url(${backgroundImage})`,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
          height: '100vh',
          display: 'flex',
          justifyContent: 'center',
          alignItems: 'center',
          color: 'Yellow'
        }}>
          <pre>
          <h1>One Stop Event Planner</h1>
          <p>Yet bed any for travelling assistance indulgence unpleasing. Not thoughts all exercise blessing. Indulgence way everything joy alteration boisterous the attachment.</p>
          <p>Party we years to order allow asked of. Every event should be Perfect</p>
          <div className="form">
            <input type="email" placeholder="Your Email Address" />
            <button>Get Started</button>
          </div>
          <p>1,600 people requested access a visit in last 24 hours</p>
          </pre>
        </section>
      </main>

      <footer style={{
          backgroundImage: `url(${backgroundImage1})`,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
          display: 'flex',
          justifyContent: 'center',
          alignItems: 'center',
          color: '#fff'
        }}>
      </footer>
    </div>
  );
}

export default App;
const backgroundImage = 'party.jpeg';
const backgroundImage1 = 'background.jpeg'; 