

.factory('authFactory', function(FIREBASE_URL) {
      var factory = {}, ref = new Firebase(FIREBASE_URL);

      factory.login = function(email, pass, cb) {
        ref.authWithPassword({
          email : email,
          password : pass
        }, function(error, authData) {
          if (error === null) {
            console.log('User logged in successfully', authData);
            cb();
          } else {
            console.log('Error logging in user:', error);
          }
        });
      };

      factory.logout = function(cb) {
        ref.unauth(function() {
          cb();
        });
      };

      factory.register = function(email, pass, cb) {
        ref.createUser({
          email : email,
          password : pass
        }, function(error, authData) {
          if (error === null) {
            console.log('User created successfully', authData);
            cb();
          } else {
            console.log('Error creating user:', error);
          }
        });
      };

      factory.resetPassword = function(email) {
        ref.resetPassword({
          email : email
        }, function(error) {
          if (error === null) {
            console.log('Password reset email sent successfully');
          } else {
            console.log('Error sending password reset email:', error);
          }
        });
      };

      return factory;
    })