import React, { useEffect } from 'react';
import ReactDOM from 'react-dom';

import { Button } from './Button';

const App = () => {
    const [state, setState] = React.useState()

    useEffect(() => {
        const fetchData = async () => {
            const response = await fetch('http://localhost:8080/test')
            const data = await response.json()
            setState(data)
        }
        fetchData()
    }, [])

    console.log(state)

    return (
        <div>
            <h1 className="text-white text-center font-bold text-2xl">Einkauf</h1>
            <Button />
        </div>
    );
};

ReactDOM.render(<App />, document.getElementById('mount'));
