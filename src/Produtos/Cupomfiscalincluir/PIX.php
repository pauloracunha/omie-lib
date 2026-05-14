<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * Informações do PIX.
 *
 * @pw_element integer $nIdPix ID do lançamento PIX.<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao gerar o PIX.<BR><BR>É obrigatório o preenchimento das tags "nIdPix" ou "cCodInt".<BR><BR>Utilize a tag "nIdPix" do método "ListarPix" da API<BR>/api/v1/financas/pix/<BR>para obter essa informação.
 * @pw_element string $cCodIntPix Código do lançamento gerado pelo integrador.<BR><BR>É obrigatório o preenchimento das tags "nIdPix" ou "cCodInt".<BR><BR>Utilize a tag "cCodInt" do método "ListarPix" da API<BR>/api/v1/financas/pix/<BR>para obter essa informação.
 * @pw_complex PIX
 */
class PIX{
	/**
	 * ID do lançamento PIX.<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao gerar o PIX.<BR><BR>É obrigatório o preenchimento das tags "nIdPix" ou "cCodInt".<BR><BR>Utilize a tag "nIdPix" do método "ListarPix" da API<BR>/api/v1/financas/pix/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nIdPix;
	/**
	 * Código do lançamento gerado pelo integrador.<BR><BR>É obrigatório o preenchimento das tags "nIdPix" ou "cCodInt".<BR><BR>Utilize a tag "cCodInt" do método "ListarPix" da API<BR>/api/v1/financas/pix/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCodIntPix;
}
