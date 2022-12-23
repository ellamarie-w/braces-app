import React from 'react';
import logo from '../Assets/Images/logoVariantDarkMode.png';

function NoAuthNavbar(){
    return (
        <nav className="navbar bg-dark bg-gradient shadow-sm p-1 mb-3 sticky-top">
            <div className="container-fluid">
                <a className="navbar-brand" href="/">
                <img src={logo} alt="BracesApp" height="32" />
                </a>
                <div className="">
                <ul className="nav">
                    <li className="nav-item">
                        <a className="nav-link link-light" href="/">Login</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link link-light" href="/">Sign up</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    )
}

export default NoAuthNavbar;