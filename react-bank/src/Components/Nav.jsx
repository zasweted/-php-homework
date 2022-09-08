import logo from '../img/1.png';
import logo2 from '../img/logo.svg';

function Nav() {



    return (

        <>
            <nav className="navbar" style={{ backgroundColor: '#e3f2fd' }}>
                <div className="container-fluid nav-custom">
                    <a className="navbar-brand" href="#">

                        <img src={logo2} alt="Logo" style={{
                            width: '90px',
                            height: '72px'
                        }}
                            className="d-inline-block align-text-top App-logo"></img>
                    </a>
                </div>
            </nav>
        </>

    );

}

export default Nav;