import React from 'react';
import logo from '../Assets/Images/logoVariantDarkMode.png';

function AuthNavbar() {
    return (
        <nav className="navbar bg-dark bg-gradient shadow-sm p-1 mb-3 sticky-top">
            <div className="container-fluid">
                <a className="navbar-brand" href="/">
                    <img src={logo} alt="BracesApp" height="32" />
                </a>
                <ul className="nav">
                    <li className="nav-item">
                        <a className="nav-link link-light" href="/">Library</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link link-light" href="/">News</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link link-light" href="/">Community</a>
                    </li>
                </ul>

                <ul className="nav justify-content-end">
                    <li className="nav-item">
                        <a className="nav-link link-light" href="/">Profile</a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link link-light" href="/">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    )
}

export default AuthNavbar