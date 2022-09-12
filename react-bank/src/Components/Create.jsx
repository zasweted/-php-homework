import { useState } from "react";


function Create({setCreateData, error}){

    const [vardas, setVardas] = useState('');
    const [pavarde, setPavarde] = useState('');
    const [asmensKodas, setAsmensKodas] = useState('');


    const create = () => {
        const data = {
            vardas,
            pavarde,
            asmensKodas
        }
        setVardas('');
        setPavarde('');
        setAsmensKodas('');
        setCreateData(data);
    }


    return(

        <>
            <section className="section-padding">
                <div className="card">
                    <div className="card-header">
                        Sukurti Vartuotoja
                    </div>
                    <div className="card-body">
                        <form>
                            <div className="form-group">
                                <label>Vardas</label>
                                <input value={vardas} onChange={e => setVardas(e.target.value)} type="text" className="form-control" />
                                <div className="error">{error}</div>
                            </div>
                            <div className="form-group">
                                <label>Pavarde</label>
                                <input value={pavarde} onChange={e => setPavarde(e.target.value)} type="text" className="form-control" />
                            </div>
                            <div className="form-group">
                                <label>Asmens Kodas</label>
                                <input value={asmensKodas} onChange={e => setAsmensKodas(e.target.value)} type="text" className="form-control" />
                            </div>
                            


                        </form>
                        <button type="button" className="btn btn-primary btn-mar" onClick={create}>Sukurti</button>
                    </div>
                </div>
            </section>
        </>

    );

}

export default Create;