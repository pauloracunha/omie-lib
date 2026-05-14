<?php

namespace OmieLib\Financas\Pix\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pix\CInfo;
use OmieLib\Financas\Pix\ListaPix;
use OmieLib\Financas\Pix\ListaStatusPix;
use OmieLib\Financas\Pix\PIXJsonClient;
use OmieLib\Financas\Pix\Response\CancelarPixResponse;
use OmieLib\Financas\Pix\Response\GerarPixResponse;
use OmieLib\Financas\Pix\Response\GerarQrCodePixResponse;
use OmieLib\Financas\Pix\Response\ListarPixResponse;
use OmieLib\Financas\Pix\Response\ListarStatusPixResponse;
use OmieLib\Financas\Pix\Response\ObterPixResponse;
use OmieLib\Financas\Pix\Response\ObterStatusPixResponse;

/**
 * Gera um QrCode para pagamento PIX.
 *
 * @pw_element string $cCodIntPix Código do lançamento gerado pelo integrador.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
 * @pw_element integer $nCodTitulo ID da conta a receber que irá gerar o PIX.<BR><BR>Caso essa tag não seja preenchida uma nova conta a receber será gerada.<BR><BR><BR>Preenchimento opcional.
 * @pw_element decimal $vValor Valor do PIX.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
 * @pw_element integer $nIdConta Código da Conta Corrente.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a conta omie.CASH<BR><BR>Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
 * @pw_element string $cUrlNotif URL de CallBack que será acionada quando o pagamento for efetuado.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nIdCliente Código do cliente.<BR>Informação utilizada para identificar o cadastro do Cliente.<BR><BR>Utilize a tag 'codigo_cliente_omie' do método 'ListarClientes' da API<BR>/api/v1/geral/clientes/<BR>para obter essa informação.<BR><BR>Preenchimento opcional.<BR><BR>Quando as  tags 'cIdCliente' e cCnpjCpf' não informadas, assumirá que o PIX foi realizado para um cliente consumidor padrão.<BR><BR>Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.<BR><BR>Essa tag não deve ser preenchida quando a tag 'nCodTitulo' for informada.
 * @pw_element string $cCnpjCpf CNPJ/CPF do cliente.<BR>Informação utilizada para identificar o cadastro do Cliente.<BR><BR>Utilize a tag 'cbpj_cpf' do método 'ListarClientes' da API<BR>/api/v1/geral/clientes/<BR>para obter essa informação.<BR><BR>Preenchimento opcional.<BR><BR>Quando as  tags 'cIdCliente' e cCnpjCpf' não informadas, assumirá que o PIX foi realizado para um cliente consumidor padrão.<BR><BR>Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.
 * @pw_complex GerarPixRequest
 */
class GerarPixRequest{
	/**
	 * Código do lançamento gerado pelo integrador.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
	 *
	 * @var string
	 */
	public string $cCodIntPix;
	/**
	 * ID da conta a receber que irá gerar o PIX.<BR><BR>Caso essa tag não seja preenchida uma nova conta a receber será gerada.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Valor do PIX.<BR><BR>Preenchimento obrigatório para o método 'GerarPix'.
	 *
	 * @var decimal
	 */
	public float $vValor;
	/**
	 * Código da Conta Corrente.<BR>Preenchimento Opcional.<BR><BR>Caso não informado, assumirá a conta omie.CASH<BR><BR>Utilize a tag 'codigo' do método 'PesquisarContaCorrente' da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nIdConta;
	/**
	 * URL de CallBack que será acionada quando o pagamento for efetuado.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cUrlNotif;
	/**
	 * Código do cliente.<BR>Informação utilizada para identificar o cadastro do Cliente.<BR><BR>Utilize a tag 'codigo_cliente_omie' do método 'ListarClientes' da API<BR>/api/v1/geral/clientes/<BR>para obter essa informação.<BR><BR>Preenchimento opcional.<BR><BR>Quando as  tags 'cIdCliente' e cCnpjCpf' não informadas, assumirá que o PIX foi realizado para um cliente consumidor padrão.<BR><BR>Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.<BR><BR>Essa tag não deve ser preenchida quando a tag 'nCodTitulo' for informada.
	 *
	 * @var integer
	 */
	public int $nIdCliente;
	/**
	 * CNPJ/CPF do cliente.<BR>Informação utilizada para identificar o cadastro do Cliente.<BR><BR>Utilize a tag 'cbpj_cpf' do método 'ListarClientes' da API<BR>/api/v1/geral/clientes/<BR>para obter essa informação.<BR><BR>Preenchimento opcional.<BR><BR>Quando as  tags 'cIdCliente' e cCnpjCpf' não informadas, assumirá que o PIX foi realizado para um cliente consumidor padrão.<BR><BR>Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.
	 *
	 * @var string
	 */
	public string $cCnpjCpf;
}
