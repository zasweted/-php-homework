

function Login() {

    return (

        <>
            <form>
                <div className="form-group">
                    <label>User Name</label>
                    <input type="text" className="form-control"/>
                </div>
                <div className="form-group">
                    <label>Password</label>
                    <input type="password" className="form-control"/>
                </div>
                
                <button type="submit" className="btn btn-primary">Submit</button>
            </form>
        </>

    );

}

export default Login;