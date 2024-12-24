document.addEventListener('DOMContentLoaded', () => {
	document.addEventListener('click', function (event) {
        const container = document.querySelector('.load_more-container');
		const listContainer = document.querySelector('.load_more-list');
		const btn = document.querySelector('.load_more');
		const url = event.target.dataset.url;
		
		btn.classList.add('btn--disabled');
		
		if (url !== undefined) {
            fetchData(url).then(function (data) {
                if (data) {
                    let dataDom = document.createElement('div');
                    dataDom.innerHTML = data;
                    
                    const elements = dataDom.querySelectorAll('.load_more-item');
                    const pagination = dataDom.querySelector('.load_more');
                    console.log(dataDom);
                    
                    event.target.remove();
                    if (elements.length > 0) {
                        elements.forEach((elem) => {
                            listContainer.append(elem);
                        });
                    }
                    if (pagination) {
                        container.append(pagination);
                    }
                }
            });
		}
	});
});

async function fetchData(url) {
	try {
		const response = await fetch(url);
		
		if (!response.ok) {
			new Error('Проблема с fetch');
		} else {
            return await response.text();
		}
	} catch (error) {
		console.error('Ошибка fetch:', error);
	}
}
