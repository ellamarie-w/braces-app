import React from 'react';
import logo from '../Assets/Images/logo.png';

function NoAuthNavbar(){
    return (
        <nav className="navbar bg-ligth">
            <div className="container-fluid">
                <a className="navbar-brand" href="#">
                <img src={logo} alt="BracesApp" height="28" />
                </a>
                <div className="">
                <ul className="nav">
                    <li className="nav-item">
                        <a className="nav-link link-dark" href="#">Login</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link link-dark" href="#">Sign up</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    )
}

export default NoAuthNavbar;