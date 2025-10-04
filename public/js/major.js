//  ==========================SIDEBAR 
        // Sidebar expand/collapse functionality with hover and lock behavior
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const lockToggle = document.getElementById('lockToggle');
        let isLocked = false;
        // Toggle lock and expand/collapse sidebar based on hover
        lockToggle.addEventListener('click', () => {
            isLocked = !isLocked;
            lockToggle.innerHTML = isLocked ? '<i class="fas fa-unlock"></i>' : '<i class="fas fa-lock"></i>';
            sidebar.classList.toggle('expanded', isLocked);
            mainContent.classList.toggle('expanded', isLocked);
        });

        sidebar.addEventListener('mouseenter', () => {
            if (!isLocked) {
                sidebar.classList.add('expanded');
                mainContent.classList.add('expanded');
            }
        });

        sidebar.addEventListener('mouseleave', () => {
            if (!isLocked) {
                sidebar.classList.remove('expanded');
                mainContent.classList.remove('expanded');
            }
        });
		
//  ================================SIDEBAR ENds  


//  =============================== DATA TABLE
		let data = [
			{ id: 1, name: "John Doe", email: "john@example.com" },
			{ id: 2, name: "Jane Smith", email: "jane@example.com" },
		];

		function renderTable() {
			const tableBody = document.querySelector("#crudTable tbody");
			tableBody.innerHTML = "";
			data.forEach((item, index) => {
				const row = document.createElement("tr");
				row.innerHTML = `
					<td>${item.id}</td>
					<td>${item.name}</td>
					<td>${item.email}</td>
					<td class="table-actions">
						<i class="fas fa-edit" onclick="editRow(${index})"></i>
						<i class="fas fa-trash" onclick="deleteRow(${index})"></i>
					</td>
				`;
				tableBody.appendChild(row);
			});
		}

		function addRow() {
			const id = data.length + 1;
			const name = prompt("Enter name:");
			const email = prompt("Enter email:");
			if (name && email) {
				data.push({ id, name, email });
				renderTable();
			}
		}

		function editRow(index) {
			const name = prompt("Enter new name:", data[index].name);
			const email = prompt("Enter new email:", data[index].email);
			if (name && email) {
				data[index].name = name;
				data[index].email = email;
				renderTable();
			}
		}

		function deleteRow(index) {
			if (confirm("Are you sure you want to delete this record?")) {
				data.splice(index, 1);
				renderTable();
			}
		}

		document.getElementById("search").addEventListener("input", function () {
			const query = this.value.toLowerCase();
			const filteredData = data.filter(item => item.name.toLowerCase().includes(query) || item.email.toLowerCase().includes(query));
			const tableBody = document.querySelector("#crudTable tbody");
			tableBody.innerHTML = "";
			filteredData.forEach((item, index) => {
				const row = document.createElement("tr");
				row.innerHTML = `
					<td>${item.id}</td>
					<td>${item.name}</td>
					<td>${item.email}</td>
					<td class="table-actions">
						<i class="fas fa-edit" onclick="editRow(${index})"></i>
						<i class="fas fa-trash" onclick="deleteRow(${index})"></i>
					</td>
				`;
				tableBody.appendChild(row);
			});
		});

		// Initial table render
		renderTable();

//  ===============================DATATABLE ENDS



//  ===============================INVOICE
		// Example functionality to calculate totals
		const qtyInputs = document.querySelectorAll('.item-details-table tbody input[type="number"]');
		const rateInputs = document.querySelectorAll('.item-details-table tbody input[type="number"]');
		const totalInputs = document.querySelectorAll('.item-details-table tbody input[readonly]');

		qtyInputs.forEach((qtyInput, index) => {
			qtyInput.addEventListener('input', () => calculateTotal(index));
		});

		rateInputs.forEach((rateInput, index) => {
			rateInput.addEventListener('input', () => calculateTotal(index));
		});

		function calculateTotal(index) {
			const qty = parseFloat(qtyInputs[index].value) || 0;
			const rate = parseFloat(rateInputs[index].value) || 0;
			totalInputs[index].value = (qty * rate).toFixed(2);
			updateFinalTotals();
		}

		function updateFinalTotals() {
			let total = 0;
			totalInputs.forEach(totalInput => {
				total += parseFloat(totalInput.value) || 0;
			});
			document.getElementById('total').value = total.toFixed(2);
			// You can add logic here to calculate CGST, SGST, and Total Amount if needed
		}

		// Calculate total dynamically
		const rateInput = document.getElementById('rate');
		const quantityInput = document.getElementById('quantity');
		const totalInput = document.getElementById('total');
		const totalAmtInput = document.getElementById('totalAmt');
		const cgstAmtInput = document.getElementById('cgstAmt');
		const sgstAmtInput = document.getElementById('sgstAmt');
		const grandTotalInput = document.getElementById('grandTotal');

		rateInput.addEventListener('input', updateTotal);
		quantityInput.addEventListener('input', updateTotal);

		function updateTotal() {
			const rate = parseFloat(rateInput.value) || 0;
			const quantity = parseInt(quantityInput.value) || 0;
			const total = (rate * quantity).toFixed(2);
			totalInput.value = total;

			// Update total amount, CGST, SGST, and Grand Total
			const totalAmount = parseFloat(totalInput.value) || 0;
			const cgst = (totalAmount * 0.09).toFixed(2); // Assuming CGST is 9%
			const sgst = (totalAmount * 0.09).toFixed(2); // Assuming SGST is 9%
			const grandTotal = (totalAmount + parseFloat(cgst) + parseFloat(sgst)).toFixed(2);

			totalAmtInput.value = totalAmount.toFixed(2);
			cgstAmtInput.value = cgst;
			sgstAmtInput.value = sgst;
			grandTotalInput.value = grandTotal;
		}


//  ===============================INVOICE ENDS