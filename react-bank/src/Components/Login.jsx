

function Login() {

    return (

        <>
            <section className="section-padding">
                <div className="card">
                    <div className="card-header">
                        Login
                    </div>
                    <div className="card-body">
                        <form>
                            <div className="form-group">
                                <label>User Name</label>
                                <input type="text" className="form-control" />
                            </div>
                            <div className="form-group">
                                <label>Password</label>
                                <input type="password" className="form-control" />
                            </div>


                        </form>
                        <button type="submit" className="btn btn-primary btn-mar">Login</button>
                    </div>
                </div>
            </section>
        </>

    );

}

export default Login;