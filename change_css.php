<style>
             body {
    margin: 0;
    padding: 0;
    font-family: 'Verdana', sans-serif;
    background-color: #f5f6fa;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #333;
}

.container {
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    padding: 40px;
    width: 100%;
    max-width: 380px;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

h1 {
    font-size: 2.2rem;
    margin-bottom: 10px;
    color: #2c3e50;
}

p {
    font-size: 1rem;
    margin-bottom: 20px;
    color: #7f8c8d;
}

input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    margin: 10px 0;
    border: 1px solid #bdc3c7;
    border-radius: 8px;
    font-size: 1rem;
    background-color: #ecf0f1;
    transition: border-color 0.3s ease;
}

input[type="password"]:focus {
    border-color: #3498db;
    outline: none;
}

button {
    background-color: #1abc9c;
    border: none;
    padding: 12px;
    width: 100%;
    color: #fff;
    font-size: 1rem;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s;
}

button:hover {
    background-color: #16a085;
    transform: translateY(-2px);
}

button:active {
    transform: translateY(0);
}

.message {
    margin-top: 15px;
    font-size: 0.9rem;
}

.message a {
    color: #3498db;
    text-decoration: none;
    font-weight: 600;
}

.message a:hover {
    text-decoration: underline;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

 

    </style>