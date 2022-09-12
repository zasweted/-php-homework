


function List({ users, setDeleteData, setModalDataAdd, setModalDataRemove}) {

    const destroy = id => {
        setDeleteData({id});
        console.log(setDeleteData);
    }

    const editAdd = user => {
        setModalDataAdd(user);

    }
    const editRemove = user => {
        setModalDataRemove(user);

    }

    if(null === users){
        return <h2>Loading...</h2>
    }

    return (

        <>
            <section className="section-padding">
                <div className="card">
                    <div className="card-header">
                    <p className="span-title">List</p>
                    </div>
                    <div className="card-body">
                        {
                            users.map(user => <div key={user.id}><ul>
                                <li>
                                    <span className="span-title">Vardas:</span> {user.vardas}
                                </li>
                                <li>
                                    <span className="span-title">Pavarde:</span> {user.pavarde}
                                </li>
                                <li>
                                    <span className="span-title">Asmens Kodas:</span> {user.asmensKodas}
                                </li>
                                <li>
                                    <span className="span-title">Iban:</span> {user.iban}
                                </li>
                                <li>
                                    <span className="span-title">Saskaitos Likutis:</span> {user.pinigai}
                                </li>
                            </ul>
                                <div style={{
                                    marginBottom:'15px'
                                }} className="btn-group" role="group" aria-label="Basic example">
                                    <button onClick={() => editAdd(user)} type="button" className="btn btn btn-success">Prideti</button>
                                    <button onClick={() => editRemove(user)} type="button" className="btn btn btn-warning">Atimtii</button>
                                    <button onClick={() => destroy(user.id)} type="button" className="btn btn-danger">Istrinti</button>
                                </div>
                            </div>)
                        }
                    </div>
                </div>
            </section>
        </>

    );

    
}
export default List;