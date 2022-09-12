

function Error({error}){

    if(error === null){
        return;
    }


    return(

        <>
            <div className="msg-bin">
                <div className="msg">
                    {error}
                </div>
            </div>
        </>

    );

}

export default Error;