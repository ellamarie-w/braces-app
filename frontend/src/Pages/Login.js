import React from 'react'
import './Login.css';
import image1 from '../Assets/Images/pexels-lukas-574071.jpg';
import image3 from '../Assets/Images/pexels-vlad-bagacian-3987066.jpg';

function Login() {
  return (
    <div className='container-fluid'>
        <div className='row justify-content-center'>
            <div className='col-6' id='image1'>
                <div className='card my-5 Message'>
                    <div className='row'>
                        <div className="col">
                            <h3>Welcome to the best free library for developers</h3>
                            <div className="col" id='email'>
                            <label for="staticEmail" className="col-sm-2 col-form-label">Email</label>
                            <div className='col-md' >
                                <input type="email" className="form-control" id="exampleFormControlInput1" placeholder="Enter your email address"/>
                            </div>
                            </div>

                        <div className="col-md" id='password'>
                            <label for="inputPassword" className="col-sm-2 col-form-label">Password</label>
                            <div className='col-md' >
                                <input type="password" className="form-control" id="inputPassword" placeholder="Enter your password"/>
                            </div>
                            <div className='col-md' id='sing-in'>
                            <form onclick="location.href='./home'">
                                <input type="submit" id='button-1' value="sing-in"/>
                            </form>
                        </div>
                
                        <div className='col-md' id='sing-up' >
                            <small>Don't have an account?</small>
                            <form action="">
                                <input type="submit" id='button-2' value="sing-up"/>
                            </form>
                        </div>
                        </div>
                        <div className='col'>
                        <div id="carouselExampleControls" className="carousel slide" data-bs-ride="carousel">
                        <div className="carousel-inner">
                        <div className="carousel-item active">
                            <img src={image1} className="d-block w-100" alt="..."/>
                        </div>
                        <div className="carousel-item">
                            <img src={image3} className="d-block w-100" alt="..."/>
                        </div>
                        </div>
                        <button className="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span className="visually-hidden">Previous</span>
                        </button>
                        <button className="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span className="carousel-control-next-icon" aria-hidden="true"></span>
                            <span className="visually-hidden">Next</span>
                        </button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
  )
}

export default Login