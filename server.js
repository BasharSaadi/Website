const express = require('express');
const stripe = require('stripe')('your_stripe_secret_key');
const app = express();

app.use(express.static('.'));
app.use(express.json());

app.post('/create-checkout-session', async (req, res) => {
  const { cart } = req.body;

  const session = await stripe.checkout.sessions.create({
    payment_method_types: ['card'],
    line_items: cart.map(item => ({
      price_data: {
        currency: 'usd',
        product_data: {
          name: item.item,
        },
        unit_amount: item.price * 100,
      },
      quantity: 1,
    })),
    mode: 'payment',
    success_url: 'https://yourwebsite.com/success.html',
    cancel_url: 'https://yourwebsite.com/cart.html',
  });

  res.json({ id: session.id });
});

app.listen(3000, () => console.log('Server running on port 3000'));