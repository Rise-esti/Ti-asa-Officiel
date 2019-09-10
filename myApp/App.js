import React, { Component } from 'react';
import { StyleSheet, View } from 'react-native';
import Search from './Component/Search';



export default class App extends Component {
  render() {
    return (
      <View>
          <Search/>

      </View>

    );
  }
};

const styles = StyleSheet.create({
  header: {
    flex: 1
  }

});
