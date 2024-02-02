
const newsArticles = [
    {
        title: 'Refer a Friend and Get $50 Off Your Next Service',
        date: 'June 15, 2022',
        content: 'Spread the word about our auto service center and earn rewards! Refer a friend to us, and you ll both receive $50 off your next service appointment. Its our way of saying thank you for your support.'
    },
    {
        title: 'Save on Car Repairs with Our Coupons',
        date: 'June 10, 2022',
        content: 'Get a discount on your next car repair by using our coupons.'
    },
    {
        title: 'AI-Powered Diagnostics',
        date: 'April 15, 2022',
        content: 'Through machine learning algorithms, vehicles can now undergo comprehensive diagnostic scans, pinpointing potential problems before they escalate.'
    },
    {
        title: 'Contactless Service Solutions',
        date: 'February 23, 2023',
        content: 'Many auto service centers now offer remote diagnostics, virtual consultations, and touchless payment systems.'
    },
    {
        title: 'Electric Vehicle Expertise',
        date: 'January 20, 2024',
        content: 'With the rising popularity of electric vehicles, auto service providers are investing in specialized training and equipment to cater to this growing market.'
    }
];

const newsContent = document.getElementById('news-content');

newsArticles.forEach(article => {
    const newsArticle = document.createElement('article');

    const newsTitle = document.createElement('h2');
    newsTitle.textContent = article.title;
    newsArticle.appendChild(newsTitle);

    const newsDate = document.createElement('p');
    newsDate.textContent = article.date;
    newsArticle.appendChild(newsDate);

    const newsText = document.createElement('p');
    newsText.textContent = article.content;
    newsArticle.appendChild(newsText);

    newsContent.appendChild(newsArticle);
});
