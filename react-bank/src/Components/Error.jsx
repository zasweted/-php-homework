

function Error({error}){

    if(error === null){
        return;
    }



    return(

        <>
            
                <div className="error-msg">
                    {
                    error && error
                    }
                     
                </div>
            
        </>

    );

}

export default Error;