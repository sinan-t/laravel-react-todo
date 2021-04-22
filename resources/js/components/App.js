import React, { Component } from 'react'
import ReactDOM from 'react-dom'
//import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './header/header'
import TodosList from './todosList/todosList'
import AddTodo from './addTodo/addTodo'

class App extends Component {
  render () {
    return (
      <div>
        <Header />
        <AddTodo />
        <TodosList />
      </div>
    )
  }
}

ReactDOM.render(<App />, document.getElementById('app'))
