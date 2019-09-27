import React from 'react';
import {View, TextInput, Text, Button, StyleSheet} from 'react-native';

class Login extends React.Component{

    render() {
      return (

          <View style={styles.conteneur}>
            <View style={styles.title}>
              <Text style={{fontFamily: 'Cochin', fontSize: 28, color: '#666'}}>
                ti-asa Service
              </Text>
            </View>
            <View style={styles.submit}>
              <Button title='Se Connecter' color="#f05f40" onPress={() => Alert.alert('Simple Button pressed')}/>
            </View>

          </View>

      );

    }

};

const styles = StyleSheet.create({
    conteneur: {
        marginTop: 50,
        flex: 1,
        height:150
    },

    title: {
        marginTop: 10,
      alignItems: 'center',
      flex: 1
    },

    submit: {

      backgroundColor: 'red'
    }

});

export default Login
